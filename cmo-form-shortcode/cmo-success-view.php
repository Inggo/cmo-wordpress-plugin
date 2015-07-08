<?php
/**
 * View file for the CMO Success Shortcode
 *
 * @author Inggo Espinosa
 * @since  1.1
 */
defined('ABSPATH') or die();
global $cmo_response;
?>
<div class="cmo-form-container">
  <?php if ($cmo_response["QuotationID"] != ""): ?>
  <div class="cmo-response cmo-success">
    <p>
      <i class="fa fa-check"></i>
      <?=$a["success_message"]?>
    </p>
  </div>
  <?php endif; ?>
</div>