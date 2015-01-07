@extends('layouts.website')

@section('content')
<div class="container">
    <div class="wrapper services">
        <div class="inner-wrapper">
            <h1>Services</h1>

            <ul class="service">
                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/fix-and-repair.png') }}" alt="SuperGeeks fix and repairs">
                    </div>

                    <div class="service-content">
                        <h2>
                            Fix and Repairs
                        </h2>

                        <p>
                            Got a broken screen, your tablet wouldn’t come on? Your beloved washing machine seems to be
                            staring at your clothes? We sure can fix it.
                        </p>

                        <p>
                            SuperGeeks is a state of the art fix-and-repair shop for gadgets and consumer electronics.
                            We employ our expertise and use industry standard and manufacturer-prescribed parts to see
                            that your devices are back in shape at super quick time with the best quality you can find
                            anywhere.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/diagnostics.png') }}" alt="SuperGeeks diagnostics">
                    </div>

                    <div class="service-content">
                        <h2>
                            Diagnostic and Troubleshooting
                        </h2>

                        <p>
                            Electronic devices need to be maintained like other machines. The best way to deal with
                            problems is to deal with them before they get serious to ensure your devices and
                            infrastructure are running at optimum levels.
                        </p>

                        <p>
                            We run diagnostics and troubleshooting on your electronic device, computer and delicate
                            household appliances as they come up; to prevent a total crash or halt of your devices. We
                            carry out routine checks, make upgrades and find answers to innate problems as they are
                            discovered.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/health-checks.png') }}" alt="SuperGeeks Schedule Health Checks">
                    </div>

                    <div class="service-content">
                        <h2>
                            Scheduled Health Checks
                        </h2>

                        <p>
                            Given growing reliance on computer and information systems to run nearly every company
                            operation, the functionality and efficiency of infrastructure is critical to most businesses
                            and yours is not an exception.
                        </p>

                        <p>
                            We provide scheduled health checks to make sure your infrastructure is working at an optimum
                            level.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/installation.png') }}" alt="SuperGeeks Installation">
                    </div>

                    <div class="service-content">
                        <h2>
                            Device Installation and Configuration
                        </h2>

                        <p>
                            Your computer is your unifying device in all spheres. Whether you want to set-up, secure or
                            repair your computer, we’ve got the know-how, tools and dedication to get the job done.
                        </p>

                        <ul class="lists">
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
                </li>

                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/emergency.png') }}" alt="SuperGeeks Emergency Response">
                    </div>

                    <div class="service-content">
                        <h2>
                            Emergency Response
                        </h2>

                        <p>
                            Sometimes things (an we mean bad computer things) happen so fast and unexpectedly that you
                            need prompt and effective response for your IT support needs. At SuperGeeks, we provide
                            emergency support services to our clients within the Lagos metropolis. We come to your
                            office or home if that's where the work needs us.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="service-icon">
                        <img src="{{ asset('img/consultation.png') }}" alt="SuperGeeks Servies and Supply Consultation">
                    </div>

                    <div class="service-content">
                        <h2>
                            Services and Supply Consultation
                        </h2>

                        <p>
                            In our present world of countless brands with almost deafening promises and juicy baits,
                            tech procurement and expert opinion are key to the long-term efficiency of your
                            infrastructure; if not that you want to make a good bargain when buying. We provide expert
                            advice to help you make those key buying decisions like a geek and even do the procurement
                            for your if it gets to that.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop