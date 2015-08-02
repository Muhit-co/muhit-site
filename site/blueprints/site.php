<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  imgsliderspeed:
    label: Image slider speed (s)
    type:  number
  headeractions:
    label: Header actions
    type: structure
    fields:
      text:
        label: Text
        type: text
      url: 
        label: Link
        type: url