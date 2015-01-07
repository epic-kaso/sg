$(document).ready(function () {
    var $quoteForm = $(".quote"),
        $map_canvas = $("#map_canvas"),
        $overlay = $(".overlay"),
        $quoteButton = $(".js-quote-button");

    $quoteForm.on("blur", ".error", function () {
        $(this).find("p").slideUp();
        $(this).removeClass("error");
    })

    $quoteForm.on('submit', function (e) {
        var $quoteName = $("input[name='name']"),
            $quoteEmail = $("input[name='email'"),
            $quotePhone = $("input[name='phone']"),
            $quoteDevice = $("input[name='device']"),
            $quoteDeviceModel = $("input[name='device_model']"),
            $quoteDeviceMan = $("input[name='device_manufacturer"),
            $quoteIssue = $("textarea[name='issue']"),
            $quoteContainer = $(".quoteform");
        errorCount = 0,
            emailPattern = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
        numberPattern = /[0-9-\/]{6,12}/;

        $quoteForm.find("li p").remove();

        if ($quoteName.val().length < 2) {
            $quoteName.parent().addClass('error').append("<p>Please input a valid name");
            errorCount++;
        }
        if (!emailPattern.test($quoteEmail.val())) {
            $quoteEmail.parent().addClass('error').append("<p>Please input a valid email address");
            errorCount++;
        }
        if (!numberPattern.test($quotePhone.val())) {
            $quotePhone.parent().addClass('error').append("<p>Please input a valid phone number");
            errorCount++;
        }
        if ($quoteDevice.val().length < 2) {
            $quoteDevice.parent().addClass('error').append("<p>Please input a valid device");
            errorCount++;
        }
        if ($quoteDeviceModel.val().length < 2) {
            $quoteDeviceModel.parent().addClass('error').append("<p>Please input a valid device model");
            errorCount++;
        }
        if ($quoteDeviceMan.val().length < 2) {
            $quoteDeviceMan.parent().addClass('error').append("<p>Please input a valid device manufacturer");
            errorCount++;
        }
        if ($quoteIssue.val().length < 2) {
            $quoteIssue.parent().addClass('error').append("<p>Please input the issue with your device");
            errorCount++;
        }

        if (errorCount == 0) {
            $.post($(this).attr('action'), $(this).serialize(), function (data) {
                if (data.success == true) {
                    $quoteForm.remove();
                    $quoteContainer.append("<p>Thank you for your request. We will give you a reply in the shortest possible time");
                }
            });
        }
        e.preventDefault();
    });

    $closeQuote = $(".js-close-quote");
    $closeQuote.on("click", function () {
        $overlay.fadeOut("slow");
        $("body").removeClass("stopScroll");
    });

    $quoteButton.on("click", function () {
        $overlay.fadeIn("slow");
        $("body").addClass("stopScroll");
    });

});