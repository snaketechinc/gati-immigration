<?php

require 'sendgrid-php/vendor/autoload.php';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("snaketechinc@gmail.com", "Gati Immigration");
$email->setSubject("New Inquiry Received!!!");
$email->addTo("info@gatiimmigration.ca", "Gati Immigration Services");
$email->addContent(
    "text/html", "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
<head>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='telephone=no' name='format-detection'>
    <title>New email template 2022-06-11</title><!--[if (mso 16)]><style type='text/css'> a {text-decoration: none;} </style><![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if !mso]><!-- -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:500,800' rel='stylesheet'><!--<![endif]--><!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <style type='text/css'>
        #outlook a {
            padding:0;
        }
        .ExternalClass {
            width:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height:100%;
        }
        .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
        }
        .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
        }
        a.es-button:hover {
            border-color:#2CB543!important;
            background:#2CB543!important;
        }
        a.es-secondary:hover {
            border-color:#ffffff!important;
            background:#ffffff!important;
        }
        [data-ogsb] .es-button {
            border-width:0!important;
            padding:12px 40px 13px 40px!important;
        }
        @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120%!important } h1 { font-size:30px!important; } h2 { font-size:26px!important; } h3 { font-size:20px!important; text-align:center } u + #body { width:100vw!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:16px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:20px!important; padding-left: 20px !important; } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
    </style>
</head>
<body style='width:100%;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
<div class='es-wrapper-color' style='background-color:#F7F7F7'><!--[if gte mso 9]>
    <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
        <v:fill type='tile' color='#F7F7F7'></v:fill>
    </v:background>
    <![endif]-->
    <table cellpadding='0' cellspacing='0' class='es-wrapper' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'>
        <tr style='border-collapse:collapse'>
            <td valign='top' style='padding:0;Margin:0'>
                <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#34265F;background-repeat:repeat;background-position:center bottom'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' bgcolor='#34265f' style='padding:1px;Margin:0;background-image:url(https://jnofdm.stripocdn.email/content/guids/CABINET_3a7a698c62586f3eb3e12df4199718b8/images/6941564382201394.png);background-color:#34265f;background-position:center bottom;background-repeat:repeat' background='https://jnofdm.stripocdn.email/content/guids/CABINET_3a7a698c62586f3eb3e12df4199718b8/images/6941564382201394.png'>
                            <table class='es-header-body' cellspacing='0' cellpadding='0' align='center' bgcolor='transparent' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:25px;background-position:center bottom'>
                                        <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td valign='top' align='center' style='padding:0;Margin:0;width:560px'>
                                                    <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center bottom' role='presentation'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td class='es-m-txt-c' align='center' style='padding:0;Margin:0;font-size:0px'><a href='https://viewstripo.email/' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px'><img src='https://jnofdm.stripocdn.email/content/guids/CABINET_6139453c0a20a6ca236d916c09bed510/images/67161515063402891_Kzl.png' alt='Hummingbird logo' title='Hummingbird logo' width='159' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' style='padding:0;Margin:0'>
                            <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;background-position:center bottom'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td align='center' valign='top' style='padding:0;Margin:0;width:540px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' style='padding:0;Margin:0;padding-bottom:5px'><h1 style='Margin:0;line-height:38px;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;font-size:32px;font-style:normal;font-weight:bold;color:#4A4A4A'>New Inquiry Received!!!</h1></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:30px;padding-right:30px'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td align='left' style='padding:0;Margin:0;width:540px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' class='es-m-txt-l' style='padding:0;Margin:0;padding-top:10px'><h3 style='Margin:0;line-height:20px;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;font-size:17px;font-style:normal;font-weight:bold;color:#4A4A4A'>Hello Gati Immigration,</h3></td>
                                                        </tr>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;line-height:26px;color:#4A4A4A;font-size:17px'>Please find new inquiry details below:</p></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' style='padding:0;Margin:0'>
                            <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td class='es-m-p10r es-m-p10l' align='left' bgcolor='#edf2fb' style='padding:0;Margin:0;padding-bottom:20px;padding-left:30px;padding-right:30px;background-color:#edf2fb;background-image:url(https://jnofdm.stripocdn.email/content/guids/CABINET_ee4a76107cfdbe7a91d88885715e30d3/images/88541615455849620.png);background-repeat:no-repeat;background-position:center top' background='https://jnofdm.stripocdn.email/content/guids/CABINET_ee4a76107cfdbe7a91d88885715e30d3/images/88541615455849620.png'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td class='es-m-p0r' align='center' style='padding:0;Margin:0;width:540px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0'>
                                                                <table border='0' width='50%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                                    <tr style='border-collapse:collapse'>
                                                                        <td style='padding:0;Margin:0;border-bottom:1px solid #cccccc;background:none;height:1px;width:100%;margin:0px'></td>
                                                                    </tr>
                                                                </table></td>
                                                        </tr>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' style='padding:0;Margin:0;padding-bottom:10px;padding-top:15px'><h2 style='Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#4A4A4A'>{$_REQUEST['firstname']} {$_REQUEST['lastname']}</h2></td>
                                                        </tr>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='left' class='es-m-txt-c' style='padding:0;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;line-height:21px;color:#4A4A4A;font-size:14px'>{$_REQUEST['message']}</p></td>
                                                        </tr>
                                                        <tr style='border-collapse:collapse'>
                                                            <td style='padding:0;Margin:0'>
                                                                <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                                    <tr class='links-images-left' style='border-collapse:collapse'>
                                                                        <td align='left' valign='top' width='100%' style='padding:0;Margin:0;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0'><a target='_blank' href='tel:{$_REQUEST['mobileNumber']}' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;color:#3B2495;font-size:16px'><img src='https://jnofdm.stripocdn.email/content/guids/CABINET_ee4a76107cfdbe7a91d88885715e30d3/images/51291613659576041.png' alt='{$_REQUEST['mobileNumber']}' title='{$_REQUEST['mobileNumber']}' align='absmiddle' width='16' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px'>{$_REQUEST['mobileNumber']}</a></td>
                                                                    </tr>
                                                                </table></td>
                                                        </tr>
                                                        <tr style='border-collapse:collapse'>
                                                            <td style='padding:0;Margin:0'>
                                                                <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                                    <tr class='links-images-left' style='border-collapse:collapse'>
                                                                        <td align='left' valign='top' width='100%' style='padding:0;Margin:0;padding-right:5px;padding-top:5px;padding-bottom:4px;border:0'><a target='_blank' href='mailto:{$_REQUEST['email']}' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;color:#3B2495;font-size:16px'><img src='https://jnofdm.stripocdn.email/content/guids/CABINET_ee4a76107cfdbe7a91d88885715e30d3/images/14401613659575727.png' alt='{$_REQUEST['email']}' title='{$_REQUEST['email']}' align='absmiddle' width='16' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px'>{$_REQUEST['email']}</a></td>
                                                                    </tr>
                                                                </table></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' style='padding:0;Margin:0'>
                            <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='Margin:0;padding-top:15px;padding-bottom:25px;padding-left:30px;padding-right:30px'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td align='center' valign='top' style='padding:0;Margin:0;width:540px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='center' class='es-m-txt-l' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;line-height:21px;color:#4A4A4A;font-size:14px'>If you have any questions or suggestions, please <a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#3B2495;font-size:14px' href='mailto:info@gatiimmigration.ca'>email us</a>.</p><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;line-height:21px;color:#4A4A4A;font-size:14px'>we will be happy to assist you!</p></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-footer' align='center' background='https://jnofdm.stripocdn.email/content/guids/CABINET_3a7a698c62586f3eb3e12df4199718b8/images/75021564382669317.png' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#F7F7F7;background-repeat:repeat;background-position:center top;background-image:url(https://jnofdm.stripocdn.email/content/guids/CABINET_3a7a698c62586f3eb3e12df4199718b8/images/75021564382669317.png)'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' bgcolor='transparent' style='padding:0;Margin:0;background-color:transparent;background-position:left top'>
                            <table bgcolor='transparent' class='es-footer-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='padding:0;Margin:0;padding-bottom:5px;padding-top:30px'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td align='center' valign='top' style='padding:0;Margin:0;width:600px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='center' height='3' style='padding:0;Margin:0'></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' bgcolor='#333333' style='padding:0;Margin:0;background-color:#333333'>
                            <table bgcolor='#FFFFFF' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='padding:30px;Margin:0'>
                                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td align='center' valign='top' style='padding:0;Margin:0;width:540px'>
                                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td align='center' class='es-infoblock' style='padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, Helvetica, Roboto, Arial, sans-serif;line-height:18px;color:#CCCCCC;font-size:12px'>You are receiving this email because someone&nbsp;has visited&nbsp;<a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px;line-height:18px' class='unsubscribe' href='https://gatiimmigration.ca'>Gati Immigration</a>.</p></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
                    <tr style='border-collapse:collapse'>
                        <td align='center' style='padding:0;Margin:0'>
                            <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px' cellspacing='0' cellpadding='0' align='center'>
                                <tr style='border-collapse:collapse'>
                                    <td align='left' style='Margin:0;padding-left:20px;padding-right:20px;'>
                                        <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                            <tr style='border-collapse:collapse'>
                                                <td valign='top' align='center' style='padding:0;Margin:0;width:560px'>
                                                    <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                                                        <tr style='border-collapse:collapse'>
                                                            <td class='es-infoblock made_with' align='center' style='padding:0;Margin:0;line-height:0px;font-size:0px;color:#CCCCCC'><a target='_blank' href='https://www.gatiimmigration.ca/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px'><img src='https://jnofdm.stripocdn.email/content/guids/CABINET_6139453c0a20a6ca236d916c09bed510/images/made_with_stripowhite.png' alt='Gati Immigration' width='200' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' title='Gati Immigration'></a></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</div>
</body>
</html>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}