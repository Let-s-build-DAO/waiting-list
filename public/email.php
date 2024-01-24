<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define recipient email addresses
        $contacts = array(
            "info@tusore.com",
            // Add more email addresses as needed
        );

        $emailSentToHost = false;

        // Loop through each recipient and send email
        foreach ($contacts as $contact) {
            // Prepare email content
            $subject = 'New enquiry from Tusore.com';
            $message = generateEmailContent($firstName, $lastName, $companyName, $email, $subject, $message);

            // Set headers for HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <info@tusore.com>' . "\r\n";

            // Send email to recipient
            if (mail($contact, $subject, $message, $headers)) {
                $emailSentToHost = true;
            }
        }

        if ($emailSentToHost) {
            // Prepare email content for the sender
            $subjectSender = 'Tusore received your enquiry';
            $bodySender = generateSenderEmailContent($firstName, $companyName);

            // Set headers for the email to the sender
            $headersSender .= "From: Tusore Experience <info@tusore.com>\r\n";
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

function generateEmailContent($firstName, $lastName, $companyName, $email, $subject, $message) {
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
                            Name: $firstName <span>$lastName</span> <br />
                            Company Name: $companyName <br />
                            Subject: $subject <br />
                            Email: $email <br />
                            Message: $message <br />
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

function generateSenderEmailContent($firstName) {
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
                                Thank you $firstName for reaching Tusore
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