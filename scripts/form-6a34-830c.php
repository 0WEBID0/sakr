<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'www.zenap35@gmail.com',
    'to' => 'name@site.com',
    'toCopy' => 'name@site.com',
    'toHiddenCopy' => 'www.zenap35@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Input',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Input\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Input',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Input\' is required.'
    )
    ),
    'message' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>