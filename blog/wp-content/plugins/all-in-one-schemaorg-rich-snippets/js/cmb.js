/**
 * Controls the behaviours of custom metabox fields.
 *
 * @author Andrew Norcross
 * @author Jared Atchison
 * @author Bill Erickson
 * @see    https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */
/*jslint browser: true, devel: true, indent: 4, maxerr: 50, sub: true */
/*global jQuery, tb_show, tb_remove */
/**
 * Defines the CMBMeta object namespace to prevent conflict with other plugins using similar javascript
 *
 */
(function ($) {
    'use strict';
    var CMBMeta;
    CMBMeta = {
        /**
         * Initialize timepicker (this will be moved inline in a future release)
         */
        TimePicker: function () {
            $('.bsf_timepicker').each(function () {
                $('#' + $(this).attr('id')).timePicker({
                    startTime: "07:00",
                    endTime: "22:00",
                    show24Hours: false,
                    separator: ':',
                    step: 30
                });
            });
        },
        /**
         * Initialize jQuery UI datepicker (this will be moved inline in a future release)
         */
        DatePicker: function () {
            $('.bsf_datepicker').each(function () {
                $('#' + jQuery(this).attr('id')).datepicker();
				//$('#_bsf_event_start_date').datepicker();
                // $('#' + jQuery(this).attr('id')).datepicker({ dateFormat: 'yy-mm-dd' });
                // For more options see http://jqueryui.com/demos/datepicker/#option-dateFormat
            });
            // Wrap date picker in class to narrow the scope of jQuery UI CSS and prevent conflicts
            $("#ui-datepicker-div").wrap('<div class="bsf_element" />');
        }, // End DatePicker
        /**
         * Initialize color picker
         */
        ColorPicker: function () {
            $('input:text.bsf_colorpicker').each(function (i) {
                $(this).after('<div id="picker-' + i + '" style="z-index: 1000; background: #EEE; border: 1px solid #CCC; position: absolute; display: block;"></div>');
                $('#picker-' + i).hide().farbtastic($(this));
            })
                    .focus(function () {
                    $(this).next().show();
                })
                    .blur(function () {
                    $(this).next().hide();
                });
        }, // End ColorPicker
        /**
         * File and image upload handling
         */
        FileUpload: function () {
            var formfield;
            $('.bsf_upload_file').change(function () {
                formfield = $(this).attr('name');
                $('#' + formfield + '_id').val("");
            });
            
            $('.bsf_upload_button').on('click', function () {
                var buttonLabel;
                formfield = $(this).prev('input').attr('name');
                buttonLabel = 'Use as ' + $('label[for=' + formfield + ']').text();
                tb_show('', 'media-upload.php?post_id=' + $('#post_ID').val() + '&type=file&bsf_force_send=true&bsf_send_label=' + buttonLabel + '&TB_iframe=true&bsf_file_upload_nonce=' + bsf_ajax_data.ajax_nonce );
                return false;
            });
            $('.bsf_remove_file_button').on('click', function () {
                formfield = $(this).attr('rel');
                $('input#' + formfield).val('');
                $('input#' + formfield + '_id').val('');
                $(this).parent().remove();
                return false;
            });
            window.bsf_original_send_to_editor = window.send_to_editor;
            window.send_to_editor = function (html) {
                var itemurl, itemclass, itemClassBits, itemid, htmlBits, itemtitle,
                    image, uploadStatus = true;
                if (formfield) {
                    if ($(html).html(html).find('img').length > 0) {
                        itemurl = $(html).html(html).find('img').attr('src'); // Use the URL to the size selected.
                        itemclass = $(html).html(html).find('img').attr('class'); // Extract the ID from the returned class name.
                        itemClassBits = itemclass.split(" ");
                        itemid = itemClassBits[itemClassBits.length - 1];
                        itemid = itemid.replace('wp-image-', '');
                    } else {
                        // It's not an image. Get the URL to the file instead.
                        htmlBits = html.split("'"); // jQuery seems to strip out XHTML when assigning the string to an object. Use alternate method.
                        itemurl = htmlBits[1]; // Use the URL to the file.
                        itemtitle = htmlBits[2];
                        itemtitle = itemtitle.replace('>', '');
                        itemtitle = itemtitle.replace('</a>', '');
                        itemid = ""; // TO DO: Get ID for non-image attachments.
                    }
                    image = /(jpe?g|png|gif|ico)$/gi;
                    if (itemurl.match(image)) {
                        uploadStatus = '<div class="img_status"><img src="' + itemurl + '" alt="" /><a href="#" class="bsf_remove_file_button" rel="' + formfield + '">Remove Image</a></div>';
                    } else {
                        // No output preview if it's not an image
                        // Standard generic output if it's not an image.
                        html = '<a href="' + itemurl + '" target="_blank" rel="external">View File</a>';
                        uploadStatus = '<div class="no_image"><span class="file_link">' + html + '</span>&nbsp;&nbsp;&nbsp;<a href="#" class="bsf_remove_file_button" rel="' + formfield + '">Remove</a></div>';
                    }
                    $('#' + formfield).val(itemurl);
                    $('#' + formfield + '_id').val(itemid);
                    $('#' + formfield).siblings('.bsf_upload_status').slideDown().html(uploadStatus);
                    tb_remove();
                } else {
                    window.bsf_original_send_to_editor(html);
                }
                formfield = '';
            };
        } // End FileUpload
    }; //End CMBMeta object
    $(document).ready(function () {
        CMBMeta.TimePicker();
        CMBMeta.DatePicker();
        CMBMeta.ColorPicker();
    //  CMBMeta.FileUpload();
    });
}(jQuery));
