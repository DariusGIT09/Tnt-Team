<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>

<body
    style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #111111; margin: 0; padding: 0; color: #ffffff;">
    <div style="background-color: #111111; padding: 40px 20px;">
        <div
            style="max-width: 600px; margin: 0 auto; background-color: #1f1f1f; border-radius: 12px; overflow: hidden; border: 1px solid #333333; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">

            <!-- Header with Icon -->
            <div
                style="background-color: #000000; padding: 40px 30px; text-align: center; border-bottom: 3px solid #D4AF37;">
                <img src="{{ $message->embed(public_path('images/ICONS/PosingICON.png')) }}" alt="TNT Team Icon"
                    style="width: 100px; height: auto; margin-bottom: 20px; filter: drop-shadow(0 0 10px rgba(212,175,55,0.3));">
                <h1
                    style="color: #D4AF37; margin: 0; font-size: 28px; text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">
                    New Inquiry</h1>
                <p
                    style="color: #666; margin-top: 5px; font-size: 14px; text-transform: uppercase; letter-spacing: 1px;">
                    Website Contact Form</p>
            </div>

            <!-- Content -->
            <div style="padding: 40px;">
                <p style="color: #cccccc; margin-bottom: 30px; font-size: 16px; line-height: 1.6;">
                    You have received a new lead from the <strong>TNT Team</strong> website. Here are the details:
                </p>

                <table style="width: 100%; border-collapse: separate; border-spacing: 0 10px; margin-bottom: 30px;">
                    <tr>
                        <td
                            style="padding: 15px; background-color: #252525; border-radius: 8px 0 0 8px; color: #888888; width: 100px; font-weight: bold; font-size: 12px; text-transform: uppercase;">
                            NAME</td>
                        <td
                            style="padding: 15px; background-color: #2a2a2a; border-radius: 0 8px 8px 0; color: #ffffff; font-weight: bold; font-size: 16px;">
                            {{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 15px; background-color: #252525; border-radius: 8px 0 0 8px; color: #888888; width: 100px; font-weight: bold; font-size: 12px; text-transform: uppercase;">
                            EMAIL</td>
                        <td
                            style="padding: 15px; background-color: #2a2a2a; border-radius: 0 8px 8px 0; color: #ffffff; font-weight: bold; font-size: 16px;">
                            <a href="mailto:{{ $data['email'] }}"
                                style="color: #D4AF37; text-decoration: none;">{{ $data['email'] }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 15px; background-color: #252525; border-radius: 8px 0 0 8px; color: #888888; width: 100px; font-weight: bold; font-size: 12px; text-transform: uppercase;">
                            GOAL</td>
                        <td
                            style="padding: 15px; background-color: #2a2a2a; border-radius: 0 8px 8px 0; color: #ffffff; font-weight: bold; font-size: 16px;">
                            {{ $data['goal'] }}</td>
                    </tr>
                </table>

                <div
                    style="margin-bottom: 12px; color: #D4AF37; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: bold;">
                    Message Content</div>
                <div
                    style="background-color: #252525; padding: 25px; border-radius: 8px; border-left: 4px solid #D4AF37; color: #dddddd; line-height: 1.8; font-size: 15px;">
                    {{ $data['message'] }}
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <a href="mailto:{{ $data['email'] }}"
                        style="background-color: #D4AF37; color: #000000; padding: 14px 30px; text-decoration: none; border-radius: 50px; font-weight: bold; text-transform: uppercase; font-size: 14px; display: inline-block;">Reply
                        to {{ $data['name'] }}</a>
                </div>
            </div>

            <!-- Footer -->
            <div style="background-color: #000000; padding: 25px; text-align: center; border-top: 1px solid #333333;">
                <p style="margin: 0; color: #666666; font-size: 12px;">&copy; {{ date('Y') }} TNT Team. All rights
                    reserved.</p>
                <p style="margin: 5px 0 0; color: #444444; font-size: 11px;">Automated message sent from tnt-team.com
                </p>
            </div>
        </div>
    </div>
</body>

</html>