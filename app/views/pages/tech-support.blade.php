@extends('layouts.website')

@section('content')
<div class="container">
    <div class="main row">
        <h1 class="page-header">Tech Support</h1>

        <div>
            <h4 class="sub-head">
                Have some issues with your devices, or just got that shiny new equipment and don’t know how to set it
                up, or you need your computers and devices to always function at optimum capacity or something your
                devices just chose not to work at the point you need it most.
            </h4>

            <p><strong>SuperGeeks tech support is available 24/7 to help you with that issue and provide support for
                    you, so you can get to fully gear in no time.</strong> We are here to help ensure that your devices,
                computer, Mac, or tablet is always performing like the day you bought it.</p>

            <p>Some areas we can help you include: </p>
        </div>

        <div class="row dPanels collapse">

            <div class="medium-6 column">
                <div class="dPanel">
                    <h4 class="dPanel_title">Diagnostics and Troubleshooting</h4>

                    <div class="dPanel_icon">
                        <img src="{{ asset('img/supergeeks-diagnosis-troubleshooting.svg') }}"
                             alt="SuperGeeks Diagnosis and Troubleshooting" width="120">
                    </div>

                    <p>
                        They say the best way to deal with problems is to deal with them before they get serious. To
                        ensure your devices and infrastructure are running at optimum levels, we help maintain your
                        devices.
                    </p>

                    <p>
                        We run diagnostics and troubleshooting on your electronic device, computer and delicate
                        household appliances as they come up; to prevent a total crash or halt of your devices. We carry
                        out routine checks, make upgrades and find answers to innate problems as they are discovered.
                    </p>
                </div>


                <div class="dPanel">
                    <h4 class="dPanel_title">Scheduled Health Checks</h4>

                    <div class="dPanel_icon">
                        <img src="{{ asset('img/supergeeks-health-checks.svg') }}" alt="SuperGeeks Health Checks"
                             width="120">
                    </div>

                    <p>
                        Given growing reliance on computer and information systems to run nearly every company
                        operation, the functionality and efficiency of infrastructure is critical to most businesses and
                        yours is not an exception.
                    </p>

                    <p>
                        We provide scheduled health checks to make sure your infrastructure is working at an optimum
                        level.
                    </p>
                </div>

                <div class="dPanel">
                    <h4 class="dPanel_title">Services &amp; Supply Consultation</h4>

                    <div class="dPanel_icon">
                        <img src="{{ asset('img/supergeeks-consultation.svg') }}"
                             alt="SuperGeeks Services and Supply Consultation"
                             width="120">
                    </div>

                    <p>
                        In our present world of countless brands with almost deafening promises and juicy baits, tech
                        procurement and expert opinion are key to the long-term efficiency of your infrastructure; if
                        not that you want to make a good bargain when buying. We provide expert advice to help you make
                        those key buying decisions like a geek and even do the procurement for your if it gets to that.
                    </p>
                </div>
            </div>

            <div class="medium-6 column">
                <div class="dPanel">
                    <h4 class="dPanel_title">Device Installation and Configuration</h4>

                    <div class="dPanel_icon">
                        <img src="{{ asset('img/supergeeks-device-installation.svg') }}"
                             alt="SuperGeeks Diagnosis and Troubleshooting" width="120">
                    </div>

                    <p>
                        Sure, we know computer is your unifying device in all spheres. Whether you want to set-up,
                        secure or repair your computer, we’ve got the know-how, tools and dedication to get the job
                        done.
                    </p>

                    <ul>
                        <li>Computer Setup</li>
                        <li>Computer Tune-up</li>
                        <li>Data Backup and Transfer</li>
                        <li>Data Recovery</li>
                        <li>Email Setup</li>
                        <li>Hardware Install</li>
                        <li>Memory Install</li>
                        <li>Operating System Install</li>
                        <li>Printer Setup or Troubleshoot</li>
                        <li>Software Install and Setup</li>
                        <li>Technology Consultation</li>
                        <li>Training</li>
                        <li>Virus Spyware Removal</li>
                        <li>Wireless Networking</li>
                    </ul>
                </div>

                <div class="dPanel">
                    <h4 class="dPanel_title">Emergency Response</h4>

                    <div class="dPanel_icon">
                        <img src="{{ asset('img/supergeeks-emergency-response.svg') }}"
                             alt="SuperGeeks Diagnosis and Troubleshooting"
                             width="120">
                    </div>

                    <p>
                        Sometimes things (and we mean bad computer things) happen so fast and unexpectedly, that you
                        need prompt and effective response for your IT support needs. At SuperGeeks, we provide
                        emergency support services to our clients within the Lagos metropolis. We come to your office or
                        home if that's where the work needs us.
                    </p>
                </div>
            </div>


        </div>

        <div class="row extra-info">
            <h3>
                What you get from SuperGeeks Tech Support
            </h3>

            <ul>
                <li>
                    <strong>Professional Services - </strong>We take care of your devices, and respect your privacy and
                    security measures. We do only what we’re meant to do and don’t go snooping around
                </li>

                <li>
                    <strong>We Take Proper Care of your device - </strong> Treating devices with care is something with
                    pride in. We pamper and take care of your devices as we would treat ours, meaning your device will
                    always remain in the best possible shape. Hmmn; it might even look cleaner than the time you brought
                    in in.
                </li>

                <li>
                    <strong>Genuine Expertise –</strong> We have a vast knowledge for the things we do. Meaning that you
                    can be rest assured that any advice we give will most likely be the best advice you can possibly
                    get. Yes, we can brag about that. But in cases were we can’t solve your device issues, we will
                    definitely refer you to the right sources.
                </li>

                <li>
                    <strong>Quick Response Time</strong> - We will always be quick to restore your devices to its
                    initial working state, because we know that your devices are important to you.
                </li>
            </ul>
        </div>
    </div>
</div>
@stop