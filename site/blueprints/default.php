<?php if(!defined('KIRBY')) exit ?>

title: Section
pages: false
files: true
fields:
  title:
    label: Name
    type:  text
  text:
    label: Text
    type: textarea
  secondtext:
    label: >
      Text<br />
      <em>(leave empty to get a single column)</em>
    type: textarea
  layoutwidth:
    label: >
      Layout width
    type: radio
    default: normal
    options:
      normal: Normal
      small: Small