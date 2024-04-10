<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $business = $_POST['business'];
    $domain = $_POST['domain'];
    $features = $_POST['features'];
    $moreFeatures = $_POST['moreFeatures'];
    $targetAudience = $_POST['targetAudience'];
    $successMetrics = $_POST['successMetrics'];
    $preference = $_POST['preference'];
    $goal = $_POST['goal'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $contacts = array(
            "business@m.chigisoft.com",
            "team@vuche.studio",
            "precious@chigisoft.com",
            "jerry@chigisoft.com",
        );

        $emailSentToHost = false;

        foreach ($contacts as $contact) {
            // Prepare email content
            $subject = 'New enquiry from vuchestudio.com';
            $message = generateEmailContent($name, $email, $tel, $business, $domain, $features, $moreFeatures, $targetAudience, $successMetrics, $preference, $goal);

            // Set headers for HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <hi@vuche.studio>' . "\r\n";

            // Send email to recipient
            if (mail($contact, $subject, $message, $headers)) {
                $emailSentToHost = true;
            }
        }

        if ($emailSentToHost) {
            // Prepare email content for the sender
            $subjectSender = 'Vuche Studios received your enquiry';
            $bodySender = generateSenderEmailContent($name, $services);

            // Set headers for the email to the sender
            $headersSender .= "From: Vuche Studios Experience <hi@vuche.studio>\r\n";
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

function generateEmailContent($name, $email, $tel, $business, $domain, $features, $moreFeatures, $targetAudience, $successMetrics, $preference, $goal) {
    $message = "
        <html>
        <head>
        <title>New enquiry from Vuche.studio</title>
        <link rel='stylesheet' href='https://use.typekit.net/aox4oht.css'>
        </head>
        <body>
        <div style='background: #F6F8F9; display: flex; justify-content: center;'>
      <div style='width: 80%; background: #ffffff; margin: auto;'>
          <div style='background: #1E1F21; height: 9px; border-radius: 0 0 16px 16px; width: 100%;'></div>
          <div style='display: flex; justify-content: center; padding-top:8%; padding-bottom:10%'>
              <div style='width: 100%; padding: 8%;'>
                  <div>
                      <img src='https://vuche.studio/images/vuche-logo.svg' alt=''/>
                      <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                        Hey there! New Challenge from <b>Vuche website</b>.
                      </p>
                      <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 32px;'>
                        Name: <b>$name</b>
                        Email: <b>$email</b>
                        Phone Number: <b>$tel</b>
                        With Business<b>$business</b><br /><br />
                        They have a Domain:<b>$domain</b>
                        Features they need: <b>$features</b> <br /><br />
                        Addition: <b> $moreFeatures</b>.<br /><br />
                        Target Audience: <b>$targetAudience</b>.<br /><br />
                        Their success metrics: <b>$successMetrics</b>. <br /><br />
                        Their website preference: <b>$preference</b>. <br /><br />
                        Why they want a website: <b>$goal</b>. <br /><br />
                      </p>
                      <div style='background-color: #E1E1E1; height: 1px; width: 100%; margin-top: 40px; margin-bottom: 40px;'></div>
                      <p style='font-size: 13px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 32px;'>
                        Chigisoft Limited RC 1370719 :: Your Technology Partner.
                        <br />
                        We exist to connect you with scalable innovation so you can focus on the things that matter in your business.
                        <br /><br />
                        <span style='font-family: scandia-web, sans-serif; font-weight: bold;'> 🇨🇦 YYC, Canada +1-825-734-4811. Canada. <br />🇳🇬 PHC, Nigeria. +2348056095332.</span><br /><br />
                          <a href='https://chigisoft.com/' target='_blank'>Website</a> ::
                          <a href='https://www.linkedin.com/company/chigisoft' target='_blank'>Linkedin</a> ::
                          <a href='https://facebook.com/chigisoft' target='_blank'>Facebook</a> ::
                          <a href='https://twitter.com/chigisoft' target='_blank'>Twitter</a>
                      </p>
                      <div style='margin-top: 32px; background: #f6f8f9; border-radius: 16px; padding: 16px 16px 32px 16px;'>
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

function generateSenderEmailContent($business, $features) {
    $bodySender = "
        <html>
        <head>
        <title>Vuche.studio received your enquiry</title>
        <link rel='stylesheet' href='https://use.typekit.net/aox4oht.css'>
        </head>
        <body>
        <div style='background: #F6F8F9; display: flex; justify-content: center;'>
      <div style='width: 80%; background: #ffffff; margin: auto;'>
          <div style='background: #FBB56C; height: 9px; border-radius: 0 0 16px 16px; width: 100%;'></div>
          <div style='display: flex; justify-content: center; padding-top:8%; padding-bottom:10%'>
              <div style='width: 100%; padding: 8%;'>
                  <div>
                      <img src='https://vuche.studio/images/vuche-logo.svg' alt=''/>
                      <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 40px;'>
                        Hi, <b>$business</b>,
                      </p>
                      <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 32px;'>
                      Thank you for reaching Vuche to grow your business. A business experience manager has been assigned to your needs and will reach you to further discuss how to work with you to achieve your goals.
                      <br /><br />
                      You may also decide to schedule a free discovery call here.
                      </p>
                      <a href='https://calendly.com/vuchestudio' target='_blank'>
                        <button style='background-color: #FBB56C; width: 100%; margin-top: 24px; padding: 15px; box-shadow: 0 1px 3px #0000001A;'>
                            <b>Schedule call</b>
                        </button>
                      </a>

                      <p style='font-size: 16px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 32px;'>
                        We see that you are interested in <b>$features</b>.
                        <br /><br />
                        You are assured of the highest dedication to your needs.
                        <br /><br />
                        — Jerry
                        <br />
                        Vuche Studio.
                      </p>
                      <div style='background-color: #E1E1E1; height: 1px; width: 100%; margin-top: 40px; margin-bottom: 40px;'></div>
                      <p style='font-size: 13px; font-family: scandia-web, sans-serif; font-weight: 400; color: #1e1f21; margin-top: 32px;'>
                        Chigisoft Limited RC 1370719 :: Your Technology Partner.
                        <br />
                        We exist to connect you with scalable innovation so you can focus on the things that matter in your business.
                        <br /><br />
                        <span style='font-family: scandia-web, sans-serif; font-weight: bold;'> 🇨🇦 YYC, Canada +1-825-734-4811. Canada. <br />🇳🇬 PHC, Nigeria. +2348056095332.</span><br /><br />
                          <a href='https://chigisoft.com/' target='_blank'>Website</a> ::
                          <a href='https://www.linkedin.com/company/chigisoft' target='_blank'>Linkedin</a> ::
                          <a href='https://facebook.com/chigisoft' target='_blank'>Facebook</a> ::
                          <a href='https://twitter.com/chigisoft' target='_blank'>Twitter</a>
                      </p>
                      <div style='margin-top: 32px; background: #f6f8f9; border-radius: 16px; padding: 16px 16px 32px 16px;'>
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