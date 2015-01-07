@extends('layouts.website')

@section('content')
<div class="container">
    <div class="main row">
        <div class="row">
            <div class="col-sm-3 column">
                <img src="{{ asset('img/sgp-logo.svg') }}" alt="SuperGeeks Gadget Protection (SGP)">
            </div>

            <div class="col-sm-9 column">
                <h1 class="page-header">SuperGeeks <br> Gadget Protection (SGP)</h1>

                <h4 class="sub-head">
                    <strong>The Only Device Protection You Will Ever Need. </strong>
                </h4>

                <h5>
                    SuperGeeks Gadget Protection (SGP) is a device protection package that gives you protection from
                    accidental damages and other device problems.
                </h5>

                <p>
                    Simply add Supergeeks Gadget Protection (SGP) to your device purchase. From the moment you work out
                    with a plan, you get 24/7 support, no question repairs and in some cases device replacement.
                </p>

                <p>
                    Beyond your regular warranty, SGP covers breakdowns, malfunctions, normal wear & tear and even
                    device damage. We take care of the small details, including labour and parts.
                </p>
            </div>
        </div>

        <div class="row features">
            <h2 class="col-xs-12 column">Features</h2>

            <div class="col-sm-3 column item">
                <h4>Normal Wear &amp; Tear</h4>

                <p>Includes repair costs for manufacturer defects in materials or workmanship and failures due to dust,
                    internal heat and humidity.</p>
            </div>

            <div class="col-sm-3 column item">
                <h4>Hardware / Software Failure</h4>

                <p>Includes repair costs for defects in manufacturer hardware, or general failure in the OS or other
                    software issues relating to installation and configuration.</p>
            </div>

            <div class="col-sm-3 column item">
                <h4>Liquid Damage</h4>

                <p>If your device gets into water or any other liquid, don’t worry, we’ll cover you.</p>
            </div>

            <div class="col-sm-3 column item">
                <h4>Irreparable Damages</h4>

                <p>If your device cannot be fixed, we’ll replace the damaged device with a new one.</p>
            </div>
        </div>

        <div class="row">
            <h2 class="">SGP Protection Plans</h2>

            <p><span class="icon-checkmark-circle">&nbsp;&nbsp;</span>indicates availability in plan; &nbsp;&nbsp;<span
                        class="icon-cancel-circle">&nbsp;&nbsp;</span>indicates non-availability in plan</p>

            <div class="row collapse">
                <ul class="SGP-plan col-sm-4 column">
                    <li class="title">SGP Mobile</li>

                    <li class="description">Smartphones, Tablets and handheld gaming</li>
                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Hardware Damage:</strong><br>Including free spare part replacement
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>OS/Software failure </strong><br>(Including virus removal)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Installation / Configuration</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>General Servicing</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Irreparable Damage</strong><br>(Replacement)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Temporary Complimentary Device</strong><br>(While device being fixed)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Trade-in* </strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>
                </ul>

                <ul class="SGP-plan col-sm-4 column">
                    <li class="title">SGP Personal Computing</li>

                    <li class="description">Laptop, Desktop, Apple TV, MACs and Printers</li>
                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Hardware Damage:</strong><br>Including free spare part replacement
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>OS/Software failure </strong><br>(Including virus removal)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Installation / Configuration</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>General Servicing</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Irreparable Damage</strong><br>(Replacement)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Temporary Complimentary Device</strong><br>(While device being fixed)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Trade-in* </strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>
                </ul>


                <ul class="SGP-plan col-sm-4 column">
                    <li class="title">SGP Home Electronics</li>

                    <li class="description">Smart TVs, Home-Theatre
                        Systems and Games
                    </li>
                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Hardware Damage:</strong><br>Including free spare part replacement
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>OS/Software failure </strong><br>(Including virus removal)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Installation / Configuration</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>General Servicing</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Irreparable Damage</strong><br>(Replacement)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Temporary Complimentary Device</strong><br>(While device being fixed)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Trade-in* </strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>
                </ul>

                <ul class="SGP-plan col-sm-4 column">
                    <li class="title">SGP White Goods</li>

                    <li class="description">Air Conditioners,
                        Washing Machines, Fridges and Microwaves
                    </li>
                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Hardware Damage:</strong><br>Including free spare part replacement
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>OS/Software failure </strong><br>(Including virus removal)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Installation / Configuration</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>General Servicing</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Irreparable Damage</strong><br>(Replacement)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Temporary Complimentary Device</strong><br>(While device being fixed)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Trade-in* </strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>
                </ul>

                <ul class="SGP-plan col-sm-4 column end">
                    <li class="title">SGP Misc</li>

                    <li class="description">SGP Misc Cameras and
                        Luxury headphones
                    </li>
                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Hardware Damage:</strong><br>Including free spare part replacement
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>OS/Software failure </strong><br>(Including virus removal)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Installation / Configuration</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>General Servicing</strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-cancel-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Irreparable Damage</strong><br>(Replacement)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Temporary Complimentary Device</strong><br>(While device being fixed)
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>

                    <li class="bullet-item row">
                        <div class="col-xs-9 column">
                            <strong>Trade-in* </strong>
                        </div>

                        <div class="col-xs-3 column">
                            <span class="icon-checkmark-circle"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 column">
                <h3>What SGP does not cover</h3>

                <p>SGP Protection plans does not cover:</p>

                <ul class="lists">
                    <li>Theft</li>
                    <li>In-home/on-site service</li>
                    <li>Phone/web support</li>
                    <li>Preventive maintenance checks</li>
                    <li>One-time batter replacement coverage</li>
                    <li>No lemon coverage</li>
                </ul>
            </div>

            <div class="col-sm-6 column">
                <h3>Where to get SGP</h3>

                <p><strong>Jumia, Konga, Game, Park ‘n’Shop</strong></p>

                <h3>How to Signup for an SGP Protection Plan</h3>

                <p>
                    Buy your device from any SGP consumer partner. During checkout, request for a specific SGP plan that
                    fits your purchase. You will be asked to fill a form; after filling the form, a premium that fits
                    your plan will be requested from you. Simply add the premium amount to your purchase and you are
                    done.
                </p>
            </div>
        </div>

        <div class="row">
            <h2>How to Submit a Claim</h2>

            <p>
                In Accordance with your plan, please drop your product off for service or repair at any SuperGeeeks
                repair facility. You are required to pay for repairs and then submit your repair bill for reimbursement.
                Once the service work has been completed and paid for, please follow one of these two options to be
                reimbursed:
            </p>
        </div>
    </div>
</div>
@stop