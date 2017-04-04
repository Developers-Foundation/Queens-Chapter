<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 4/14/16
 * Time: 10:32 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require '../../../vendor/autoload.php';
$getPost = (array)json_decode(file_get_contents('php://input'));

$from = new SendGrid\Email($getPost['fromName'], $getPost['sendFrom']);
$subject = $getPost['subject'];
$to = new SendGrid\Email($getPost['toName'], $getPost['sendTo']);
$content = new SendGrid\Content("text/plain", $getPost['msgHTML']);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo json_encode(array('success' => true, 'message' => $response->statusCode() . " : " . $response->headers() . "\n" . $response->body()));