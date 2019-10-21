<?php
$variables = [
      'SENDGRID_API_KEY'=>'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',
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => '',
      'DB_NAME' => 'demoDB',
      'DB_PORT' => '3306',
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }

  ?>