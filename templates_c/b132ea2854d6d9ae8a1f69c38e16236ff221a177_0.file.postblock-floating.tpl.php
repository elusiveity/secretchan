<?php
/* Smarty version 3.1.30, created on 2018-04-04 07:49:02
  from "/home/nukeground/public_html/templates/postblock-floating.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac4836e605659_67471036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b132ea2854d6d9ae8a1f69c38e16236ff221a177' => 
    array (
      0 => '/home/nukeground/public_html/templates/postblock-floating.tpl',
      1 => 1522828141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac4836e605659_67471036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Button trigger modal -->
<!-- New Post Button -->
<div class='new-post-button'>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class='fa fa-plus'></i>
  </button>
</div>

<!-- Modal -->
<!-- New Post Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
</div><?php }
}
