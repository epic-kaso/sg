$(window).load(function () {
    function s() {
        e.css("height", FPContainerHeight);
        t.css("height", browserHeight);
        n.css({height: browserHeight})
    }

    function o(e, n) {
        if (e.deltaY < 0 && heroInView == 1) {
            TweenMax.to($html_body, 1, {scrollTop: t.offset().top, ease: Power2.easeInOut});
            $html_body.trigger("inFeatured")
        }
        if (e.deltaY > 0 && footerInView == 1) {
            TweenMax.to($html_body, 1, {scrollTop: t.offset().top, ease: Power2.easeInOut});
            $html_body.trigger("inFeatured")
        }
    }

    function u() {
        content = document.createElement("div");
        for (i = 0; i < FPProjectsLength; i++) {
            spanElement = document.createElement("span");
            textNode = document.createTextNode("");
            spanElement.appendChild(textNode);
            content.appendChild(spanElement);
            breakPoints[i] = i * browserHeight
        }
        content.setAttribute("id", "FPnav");
        r.append(content)
    }

    function a(e) {
        e == "next" ? TweenMax.to(t, 1, {
            scrollTop: "+=" + browserHeight,
            ease: Power2.easeInOut
        }) : TweenMax.to(t, 1, {scrollTop: "-=" + browserHeight, ease: Power2.easeInOut})
    }

    var e = $(".featured-projects"), t = $(".featured-container"), n = e.find(">div"), r = $(".featured-projects-outer");
    $footer = $("#footer"), $hero = $(".hero"), $html_body = $("html, body"), FPProjectsLength = n.length, browserWidth = parseInt($("html, body").outerWidth()), browserHeight = parseInt($("html, body").outerHeight()), FPContainerHeight = FPProjectsLength * browserHeight, $works = $(".works"), $work = $works.find(".work"), breakPoints = [], heroInView = !1, footerInView = !1, inFeatured = !1, deltaFactor = 0;
    fpIndex = 0;
    s();
    $html_body.on("mousewheel", o);
    $footer.waypoint({
        offset: "bottom-in-view", handler: function () {
            footerInView = !0;
            heroInView = !1;
            inFeatured = !1;
            $html_body.on("mousewheel", o)
        }
    });
    $hero.waypoint({
        offset: "0%", handler: function () {
            inFeatured = !1;
            heroInView = !0;
            footerInView = !1;
            $html_body.on("mousewheel", o)
        }
    });
    $html_body.on("inFeatured", function () {
        heroInView = !1;
        footerInView = !1;
        inFeatured = !0;
        $(this).on("mousewheel", function (e) {
            if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
                fpIndex < FPProjectsLength && a("next");
                t.scrollTop() == breakPoints[FPProjectsLength - 1] && $html_body.off("mousewheel")
            } else {
                fpIndex < FPProjectsLength && a("prev");
                t.scrollTop() == breakPoints[0] && $html_body.off("mousewheel")
            }
            deltaFactor = e.deltaFactor;
            e.preventDefault()
        })
    });
    t.waypoint({
        offset: 0, handler: function () {
            inFeatured = !0, heroInView = !1, footerInView = !1
        }
    });
    u();
    console.log(breakPoints);
    $controls = $("#FPnav").find("span");
    $controls.each(function () {
        $(this).click(function () {
            TweenMax.to(t, 1, {scrollTop: breakPoints[$(this).index()], ease: Power2.easeInOut})
        })
    });
    $work.each(function () {
        $(this).on("mouseover", function () {
            $this = $(this);
            $(this).addClass("reveal")
        })
    }).on("mouseleave", function () {
        $this = $(this);
        $(this).removeClass("reveal")
    });
    $("#w-thumbs > li").each(function () {
        $(this).hoverdir({speed: 10, easing: SteppedEase, hoverDelay: 0})
    });
    $("#w-thumbs").isotope({columnWidth: 600, itemSelector: "li"});
    $load_more = $(".load-more");
    $load_more.on("click", function (e) {
        $href = $(this).attr("href");
        $.getJSON($href, function (e) {
            items = [];
            $.each(e, function (e, t) {
                items.push("<li class='" + t.class + "'><a href=''><img src='" + t.img + "' alt='Project1'><div><h2>" + t.title + "</h2><span>" + t.description + "</span></div></a></li>")
            });
            var t = "'" + items.join("") + "'";
            $("#w-thumbs").append(t).isotope("appended", t, function () {
                $("w-thumbs").isotope("relayout")
            })
        });
        e.preventDefault()
    })
});