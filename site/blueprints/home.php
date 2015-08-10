<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  coverimage:
    label: Cover image
    type: select
    options: images
  introtext:
    label: Intro Text
    type:  textarea
    size:  large
  features:
    label: Features
    type: structure
    entry: >
      <h3><i class="ion-{{icon}}" style="font-size: 3em;"></i></h3>
      <h4>{{title}}<br /></h4>
      <i>{{descr}}</i>
    fields:
      icon:
        label: Feature icon
        type: text
        icon: compass
      title:
        label: Feature title
        type: text
      descr:
        label: Feature description
        type: textarea
  columns:
    label: Features layout
    type: select
    default: 4
    options:
      6: 2 per row
      4: 3 per row
      3: 4 per row
      2: 6 per row
  secondtext:
    label: Secondary Text
    type:  textarea
    size:  large