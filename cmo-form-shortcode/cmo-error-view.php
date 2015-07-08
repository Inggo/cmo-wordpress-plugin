<?php
/**
 * View file for the CMO Error Shortcode
 *
 * @author Inggo Espinosa
 * @since  1.1
 */
defined('ABSPATH') or die();
global $cmo_response;
?>
<div class="cmo-form-container">
  <?php if ($cmo_response["Error"] != ""): ?>
  <div class="cmo-response cmo-error">
    <p>
      <i class="fa fa-info-circle"></i>
      <?=$cmo_response["Error"]?>
    </p>
  </div>
  <?php endif; ?>
</div>