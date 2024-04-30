<!DOCTYPE html>
<html>

<head>
    <title>Verification</title>
</head>

<body>


    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9"
        id="bodyTable">
        <tbody>
            <tr>
                <td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperWebview"
                        style="max-width:600px">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding-top: 20px; padding-bottom: 20px; padding-right: 0px;"
                                                    align="right" valign="middle" class="webview">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody"
                        style="max-width:600px">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                        class="tableCard"
                                        style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
                                        <tbody>
                                            <tr>
                                                <td style="background-color:#a6c626;font-size:1px;line-height:3px"
                                                    class="topBorder" height="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 60px; padding-bottom: 20px;" align="center"
                                                    valign="middle" class="emailLogo">
                                                    {{-- <a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="http://email.aumfusion.com/vespro/img/hero-img/blue/logo.png" style="width:100%;max-width:150px;height:auto;display:block" width="150">
												</a> --}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 20px;" align="center" valign="top"
                                                    class="imgHero">
                                                    {{-- <a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="http://email.aumfusion.com/vespro/img/hero-img/blue/heroGradient/user-account.png" style="width:100%;max-width:600px;height:auto;display:block;color: #f9f9f9;" width="600">
												</a> --}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;"
                                                    align="center" valign="top" class="mainTitle">
                                                    <h2 class="text"
                                                        style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">
                                                        Password Reset</h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;"
                                                    align="center" valign="top" class="subTitle">
                                                    <h4 class="text"
                                                        style="color:#999;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">
                                                        If you'r lost your password or wish to  reset it, use the link below to get started.</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:20px;padding-right:20px" align="center"
                                                    valign="top" class="containtTable ui-sortable">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                        class="tableDescription" style="">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-bottom: 20px;" align="center"
                                                                    valign="top" class="description">
                                                                    <p class="text"
                                                                        style="color:#666;font-family:'Open Sans',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                        class="tableButton" style="">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-top:20px;padding-bottom:20px"
                                                                    align="center" valign="top">
                                                                    <table border="0" cellpadding="0"
                                                                        cellspacing="0" align="center">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="background-color: #a6c626;padding: 12px 35px; border-radius: 50px;"
                                                                                    align="center" class="ctaButton"> <a
                                                                                        href="{{ route('reset.password.get', $token) }}"
                                                                                        style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block"
                                                                                        target="_blank"
                                                                                        class="text">Reset Password</a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="middle" style="padding-bottom: 40px;"
                                                    class="emailRegards">
                                                    <!-- Image and Link // -->
                                                    <a href="#" target="_blank" style="text-decoration:none;">
                                                        <img mc:edit="signature"
                                                            src="http://email.aumfusion.com/vespro/img//other/signature.png"
                                                            alt="" width="150" border="0"
                                                            style="width:100%;
    max-width:150px; height:auto; display:block;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding-top:20px;padding-bottom:20px;padding-right:0px" align="right" valign="middle">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
