<p>尊敬的<?= $data['user'];?></p>
<p>您的找回密码链接如下：</p>
<?php $url = Yii::$app->urlManager->createAbsoluteUrl(['admin/manager/mailchangepasswd','timestamp'=>time(),'adminuser'=>$data['user'],'token'=>$token]);?>
<p><a href="<?= $url;?>"><?= $url;?></a></p>
<p>该链接5分钟内有效，请勿传递给别人</p>
<p>该邮件为系统自动发送，请勿回复!</p>