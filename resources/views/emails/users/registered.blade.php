<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name', 'HIPE_AEMS') }}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body style="margin:0;padding:0;">
    <!-- container -->
    <div style="width:100%!important;min-width:100%;background-color:#fafafa;color:#333333;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:normal;text-align:center;line-height:20px;font-size:14px;margin:0;padding:0">
        <!-- outer table -->
        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;" bgcolor="#fafafa">
            <tbody>
                <tr style="text-align:center;" align="center">
                    <td>
                        <!-- header -->
                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;" bgcolor="#fafafa">
                            <tbody>
                            <tr style="vertical-align:top;">
                                <td>
                                    <h1>{{ config('app.name', 'HIPE_AEMS') }}</h1>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- body -->
                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;margin:0 auto;" bgcolor="#fafafa">
                            <tbody>
                            <tr>
                                <td>
                                    <div style="min-width:400px;background-color:#fff;border:1px solid #ddd;border-radius:4px;padding:15px;">
                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;">
                                            <tbody>
                                            <tr>
                                                <td style="font-size: 1.35rem;padding:15px 0;border-bottom:1px solid #ddd;">
                                                    <strong>{{ $user->first_name.' '.$user->first_name }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 1.35rem;padding:15px 0;border-bottom:1px solid #ddd;">
                                                     Your account on <strong>{{ config('app.name', 'HIPE_AEMS') }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 1.35rem;padding:15px 0;border-bottom:1px solid #ddd;">
                                                    has been created successfully
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;">
                                            <tbody>
                                            <tr>
                                                <td style="padding:5px;text-align:left;">
                                                    Click here to set a password:
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;">
                                            <tbody>
                                            <tr>
                                                <td style="padding:5px 15px;margin-top:20px;">
                                                    <a role="button" style="padding:5px 10px;cursor:pointer;width:60px;text-decoration:none;background-color:#295EA7;border-radius:4px;color:#fff;" href="{{url('/register?t='.$user->registration_token)}}">Set Password</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- fotter -->
                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:center;height:100%;width:100%;padding:20px;" bgcolor="#fafafa">
                            <tbody>
                            <tr>
                                <td style="margin:0 auto;color:#888;">
                                    Bonaberi, Cameroon
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
