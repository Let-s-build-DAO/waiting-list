<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $option = $_POST['option'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Check if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define recipient email addresses
        $contacts = array(
            "info@hushhomesng.com",
            // Add more email addresses as needed
        );

        $emailSentToHost = false;

        // Loop through each recipient and send email
        foreach ($contacts as $contact) {
            // Prepare email content
            $subject = 'New enquiry from Hushhomes.com';
            $message = generateEmailContent($name, $option, $email, $phone, $message);

            // Set headers for HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <info@hushhomesng.com>' . "\r\n";

            // Send email to recipient
            if (mail($contact, $subject, $message, $headers)) {
                $emailSentToHost = true;
            }
        }

        if ($emailSentToHost) {
            // Prepare email content for the sender
            $subjectSender = 'Hushhomes received your enquiry';
            $bodySender = generateSenderEmailContent($name, $option, $orgBudget);

            // Set headers for the email to the sender
            $headersSender .= "From: Hushhomes Experience <info@hushhomesng.com>\r\n";
            $headersSender = "MIME-Version: 1.0" . "\r\n";
            $headersSender .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Send email to the sender
            $mailSentToSender = mail($email, $subjectSender, $bodySender, $headersSender);

            if ($mailSentToSender) {
                $response = [
                    "status" => "success",
                    "message" => "Your message has been sent successfully."
                ];
            } else {
                $response = [
                    "status" => "error",
                    "message" => "Unable to send email to the sender."
                ];
            }
        } else {
            $response = [
                "status" => "error",
                "message" => "Unable to send email to the recipients."
            ];
        }
    } else {
        $response = [
            "status" => "error",
            "message" => "Please enter a valid email address."
        ];
    }
} else {
    $response = [
        "status" => "error",
        "message" => "Invalid request method."
    ];
}

// Send JSON response
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

function generateEmailContent($name, $option, $phone, $email, $message) {
    $message = "
        <html>
        <head>
        <title>New enquiry from hushhomes.com</title>
        <link rel='stylesheet' href='https://use.typekit.net/aox4oht.css'>
        </head>
        <body>
          <div style='background: #F6F8F9; display: flex; justify-content: center;'>
            <div style='width: 70%; background: #ffffff; margin: auto;'>
                <div style='background: #8CC53F; height: 9px; border-radius: 0 0 16px 16px; width: 100%;'></div>
                <div style='display: flex; justify-content: center; padding-top:8%; padding-bottom:10%'>
                    <div style='width: 100%; padding: 8%;'>
                        <div>
                            <img src='https://hushhomes.com/assets/img/hush-logo.png' alt=''/>
                            <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                                Hey there! New Challenge from
                            </p>
                            <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                            Name: $name
                            Quest Call Option: $option
                            Phone Number: $phone
                            Email: $email
                            Message: $message
                            </p>
                            <div style='background-color: #8CC53F; height: 1px; width: 100%; margin-top: 40px;'></div>
                            <div style='margin-top: 54px; background: #f6f8f9; border-radius: 16px; padding: 16px 16px 32px 16px;'>
                                <p style='font-size: 13px; color: #1e1f21; font-family: scandia-web, sans-serif; font-weight: 400;'>
                                    Disclaimer:<br />
                                    This email and any attachments thereto are confidential and privileged. If you have received it in error, please delete it immediately and notify the sender. Do not disclose, copy, circulate, or in any way use it. The information contained herein is for the intended address(es) only, if you reply, it’s at your own risk. Emails are not guaranteed to be secure or error-free, the message and any attachment could be intercepted, corrupted, lost, delayed, incomplete, or amended. Chigisoft does not accept liability for any damage caused by this email or its attachment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </body>
        </html>
    ";

    return $message;
}

function generateSenderEmailContent($name) {
    $bodySender = "
        <html>
        <head>
        <title>Hushhomes received your enquiry</title>
        <link rel='stylesheet' href='https://use.typekit.net/aox4oht.css'>
        </head>
        <body>
          <div style='background: #F6F8F9; display: flex; justify-content: center;'>
            <div style='width: 70%; background: #ffffff; margin: auto;'>
                <div style='background: #8CC53F; height: 9px; border-radius: 0 0 16px 16px; width: 100%;'></div>
                <div style='display: flex; justify-content: center; padding-top:8%; padding-bottom:10%'>
                    <div style='width: 100%; padding: 8%;'>
                        <div>
                            <img src='https://hushhomes.com/assets/img/hush-logo.svg' alt=''/>
                            <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                            </p>
                            <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                                Thank you $name for reaching HushHomes to cater for your real estate needs. A business experience manager has been assigned to your needs and will reach you to further discuss how to work with you to achieve your goals.<br /><br />
                                <br /><br />
                                You may also decide to schedule a free discovery call here.
                                <br /><br />
                            </p>
                            <div style='background-color: #8CC53F; height: 1px; width: 100%; margin-top: 40px;'></div>
                            <div style='margin-top: 54px; background: #f6f8f9; border-radius: 16px; padding: 16px 16px 32px 16px;'>
                                <p style='font-size: 13px; color: #1e1f21; font-family: scandia-web, sans-serif; font-weight: 400;'>
                                    Disclaimer:<br />
                                    This email and any attachments thereto are confidential and privileged. If you have received it in error, please delete it immediately and notify the sender. Do not disclose, copy, circulate, or in any way use it. The information contained herein is for the intended address(es) only, if you reply, it’s at your own risk. Emails are not guaranteed to be secure or error-free, the message and any attachment could be intercepted, corrupted, lost, delayed, incomplete, or amended. Chigisoft does not accept liability for any damage caused by this email or its attachment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </body>
        </html>
    ";

    return $bodySender;
}
?>