<?php

class GadgetSwapController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('gadget-swap.client.index');
	}

    function getIndex() {
        $model = Input::get('model', null);

        $gadgetMakers = GadgetMaker::
        with('gadget_maker,sizes,colors,base_line_prices')->get();
        $networks = Network::get();

        if (empty($model)) {
            $neededGadgets = Gadget::get();
        } else {
            $maker = GadgetMaker::findOrFail($model);
            $neededGadgets = $maker->gadgets;
        }


        if (Request::ajax()) {
            $data = array(
                'models' => array(),
                'devices' => array()
            );

            foreach ($gadgetMakers as $t) {
                $t->image_url = strtolower($t->name) . '.png';
                $t->slug = Str::slug($t->name);
                $data['models'][] = $t;
            }
            foreach ($neededGadgets as $t) {
                $t->colors = $this->fetch_array($t->colors);
                $t->sizes = $this->fetch_array($t->sizes);
                $t->slug = Str::slug($t->model);
                $data['devices'][] = $t;
            }
            return Response::json($data);
        } else {
            $data = array(
                'models' => $gadgetMakers,
                'devices' => $neededGadgets,
                'networks' => $networks
            );
            return View::make('gadget-swap.server.dashboard',$data);
        }
    }

    function postAddMake() {
        $data = Input::all();

        if(!isset($data['name']))
        {
            return Redirect::back();
        }

        $make = GadgetMaker::create($data);

        if(isset($data['normal_condition'])){
            $make->normal_condition = $data['normal_condition'];
        }

        if(isset($data['scratched_condition'])){
            $make->scratched_condition = $data['scratched_condition'];
        }

        if(isset($data['bad_condition'])){
            $make->bad_condition = $data['bad_condition'];
        }

        $make->save();

        return Redirect::action('GadgetSwapController@getIndex');
    }

    function postAddNetwork() {
        $data = Input::all();

        if(!isset($data['name']) || !isset($data['description']))
        {
            return Redirect::back();
        }

        $make = Network::create($data);

        return Redirect::action('GadgetSwapController@getIndex');
    }

    function postAddModel() {
        $data = Input::all();

        if(
            !isset($data['model']) ||
            !isset($data['gadget_maker_id']) ||
            !isset($data['sizes']) ||
            !isset($data['baselines'])
        ){
            return Redirect::back();
        }

        $make = Gadget::create(array(
            'model' => $data['model'],
            'gadget_maker_id' => $data['gadget_maker_id']
        ));

        $sizes = explode(',', $data['sizes']);
        foreach ($sizes as $size) {
            $make->create_sizes(array('value' => trim($size)));
        }

        $baselines = \BaseLinePrice::extractBaseLinePrices($data['baselines']);
        foreach ($baselines as $key => $value) {
            $make->create_base_line_prices(array('size' => trim($key), 'value' => trim($value)));
        }

        if(isset($data['device_image_url'])){
            $make->image_url = $data['device_image_url'];
        }
        $make->save();

        return Redirect::action('GadgetSwapController@getIndex');
    }

    function getAllDevices() {

    }

    function deleteGadget($id) {

        $g = Gadget::find($id);
        $g->destroyEveryData();

        if (Request::ajax()) {
            return Response::json(array(
                'status' => 'success',
                'url' => route('GadgetSwapController@getIndex')
            ));
        } else {
            return Redirect::action('GadgetSwapController@getIndex');
        }
    }

    private function fetch_array($colors) {
        $r = array();
        foreach ($colors as $v) {
            $v->slug = Str::slug($v->value);
            $r[] = $v;
        }
        return $r;
    }

}
