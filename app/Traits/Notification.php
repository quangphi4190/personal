<?php  

namespace App\Traits;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use LaravelFCM\Message\Topics;

trait Notification 
{
	public function topicMessage($topic_name = '', $data = [])
	{
		$optionBuilder = new OptionsBuilder();
		$optionBuilder->setTimeToLive(60*20);
		$optionBuilder->setContentAvailable(true);

		$dataBuilder = new PayloadDataBuilder();
		$dataBuilder->addData($data);

		$option = $optionBuilder->build();
		$data = $dataBuilder->build();

		$topic = new Topics();
		$topic->topic($topic_name);

		$topicResponse = FCM::sendToTopic($topic, $option, null, $data);

		$topicResponse->isSuccess();
		$topicResponse->shouldRetry();
		$topicResponse->error();

		return true;
	}
}

?>