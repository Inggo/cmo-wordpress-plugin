<?php
/**
 * View file for the CMO Form Shortcode, customized for Yellow School Bus
 *
 * @author Inggo Espinosa
 * @since  1.2
 */
defined('ABSPATH') or die();
global $cmo_response;
$cmo_learn_about = array(
  'Website',
  'Internet',
  'Social Media',
  'Customer referral',
  'Staff referral',
  'Word of mouth',
  'Walk in',
  'Saw fleet',
  'Email',
  'Video',
  'Brochure',
);
?>
<div class="cmo-form-container">
  <form name="frmDistinctive" class="cmo-form" method="post" action="<?=$a['action']?>">
    <?php if ($cmo_response["Error"] != ""): ?>
    <div class="cmo-response cmo-error">
      <p>
        <i class="fa fa-info-circle"></i>
        <?=$cmo_response["Error"]?>
      </p>
    </div>
    <?php endif; ?>
    <?php if ($cmo_response["QuotationID"] != ""): ?>
    <div class="cmo-response cmo-success">
      <p>
        <i class="fa fa-check"></i>
        <?=$a["success_message"]?>
      </p>
    </div>
    <?php endif; ?>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Send Quotation Email?</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="True" <?=$cmo_response['SendQuotationEmail'] == "True" ? 'checked':''?>> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="False" <?=$cmo_response['SendQuotationEmail'] == "False" ? 'checked':''?>> No</label>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group">
      <label for="cmo-Title">Title</label>
      <input id="cmo-Title" type="text" name="Title" placeholder="" value="<?=$cmo_response["ClientTitle"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-Initials">Initials</label>
      <input id="cmo-Initials" type="text" name="Initials" placeholder="" value="<?=$cmo_response["Initials"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Firstname">First Name</label>
      <input id="cmo-Firstname" type="text" name="Firstname" placeholder="" required value="<?=$cmo_response["Firstname"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Surname">Last Name</label>
      <input id="cmo-Surname" type="text" name="Surname" placeholder="" value="<?=$cmo_response["Surname"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-Salutation">Salutation</label>
      <input id="cmo-Salutation" type="text" name="Salutation" placeholder="" value="<?=$cmo_response["Salutation"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Department">Department</label>
      <input id="cmo-Department" type="text" name="Department" placeholder="" value="<?=$cmo_response["Department"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Company">Company</label>
      <input id="cmo-Company" type="text" name="Company" placeholder="" value="<?=$cmo_response["Company"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Address1">Address Line 1</label>
      <input id="cmo-Address1" type="text" name="Address1" placeholder="" value="<?=$cmo_response["Address1"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Address2">Address Line 2</label>
      <input id="cmo-Address2" type="text" name="Address2" placeholder="" value="<?=$cmo_response["Address2"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Address3">Address Line 3</label>
      <input id="cmo-Address3" type="text" name="Address3" placeholder="" value="<?=$cmo_response["Address3"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Address4">Address Line 4</label>
      <input id="cmo-Address4" type="text" name="Address4" placeholder="" value="<?=$cmo_response["Address4"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Postcode">Postal Code</label>
      <input id="cmo-Postcode" type="text" name="Postcode" placeholder="" value="<?=$cmo_response["Postcode"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group">
      <label for="cmo-TelNo">Telephone Number</label>
      <input id="cmo-TelNo" type="text" name="TelNo" placeholder="" value="<?=$cmo_response["TelNo"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-FaxNo">Fax Number</label>
      <input id="cmo-FaxNo" type="text" name="FaxNo" placeholder="" value="<?=$cmo_response["FaxNo"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Email">Email Address</label>
      <input id="cmo-Email" type="email" name="Email" placeholder="" required value="<?=$cmo_response["Email"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-Description">Quotation Request</label>
      <input id="cmo-Description" type="text" name="Description" placeholder="" value="<?=$cmo_response["Description"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-StartDateTime">Start Date/Time</label>
      <input id="cmo-StartDateTime" type="text" name="StartDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["StartDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-PositionDateTime">Position Date/Time</label>
      <input id="cmo-PositionDateTime" type="text" name="PositionDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["PositionDateTime"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-PickupDateTime">Pickup Date/Time</label>
      <input id="cmo-PickupDateTime" type="text" name="PickupDateTime" placeholder="dd/mm/yyyy hh:mm" required value="<?=$cmo_response["PickupDateTime"]?>">
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Pickup">Pickup Place</label>
      <input id="cmo-Pickup" type="text" name="Pickup" placeholder="" required value="<?=$cmo_response["Pickup"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-PickupLatitude">Pickup Latitude</label>
      <input id="cmo-PickupLatitude" type="text" name="PickupLatitude" placeholder="" value="<?=$cmo_response["PickupLatitude"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-PickupLongitude">Pickup Longitude</label>
      <input id="cmo-PickupLongitude" type="text" name="PickupLongitude" placeholder="" value="<?=$cmo_response["PickupLongitude"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-PickupInstructions">Pickup Instructions</label>
      <textarea name="PickupInstructions" placeholder=""><?=$cmo_response["PickupInstructions"]?></textarea>
    </div>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Single Journey?</label>
      <label class="cmo-radio-label"><input type="radio" name="SingleJourney" value="True" <?=$cmo_response['SingleJourney'] == "True" ? 'checked':''?>> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="SingleJourney" value="False" <?=$cmo_response['SingleJourney'] == "False" ? 'checked':''?>> No</label>
    </div>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Vehicle To Stay?</label>
      <label class="cmo-radio-label"><input type="radio" name="VehicleToStay" value="True" <?=$cmo_response['VehicleToStay'] == "True" ? 'checked':''?>> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="VehicleToStay" value="False" <?=$cmo_response['VehicleToStay'] == "False" ? 'checked':''?>> No</label>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Destination">Destination</label>
      <input id="cmo-Destination" type="text" name="Destination" placeholder="" required value="<?=$cmo_response["Destination"]?>">
    </div>
    <?php if ($cmo_layout_full): ?>
    <div class="cmo-form-group">
      <label for="cmo-DestinationLatitude">Destination Latitude</label>
      <input id="cmo-DestinationLatitude" type="text" name="DestinationLatitude" placeholder="" value="<?=$cmo_response["DestinationLatitude"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-DestinationLongitude">Destination Longitude</label>
      <input id="cmo-DestinationLongitude" type="text" name="DestinationLongitude" placeholder="" value="<?=$cmo_response["DestinationLongitude"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-DestinationInstructions">Destination Instructions</label>
      <textarea name="DestinationInstructions" placeholder=""><?=$cmo_response["DestinationInstructions"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <label for="cmo-ArrivalDateTime">Arrival Date/Time</label>
      <input id="cmo-ArrivalDateTime" type="text" name="ArrivalDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["ArrivalDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-LeaveDateTime">Leave Date/Time</label>
      <input id="cmo-LeaveDateTime" type="text" name="LeaveDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["LeaveDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-BackDateTime">Back Date/Time</label>
      <input id="cmo-BackDateTime" type="text" name="BackDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["BackDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-FinishDateTime">Back Date/Time</label>
      <input id="cmo-FinishDateTime" type="text" name="FinishDateTime" placeholder="dd/mm/yyyy hh:mm" value="<?=$cmo_response["FinishDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Passengers">Passengers</label>
      <input id="cmo-Passengers" type="number" name="Passengers" placeholder="" min="0" step="1" value="<?=$cmo_response["Passengers"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Distance">Distance</label>
      <input id="cmo-Distance" type="number" name="Distance" placeholder="" min="0" value="<?=$cmo_response["Distance"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-EmptyDistance">Empty Distance</label>
      <input id="cmo-EmptyDistance" type="number" name="EmptyDistance" placeholder="" min="0" value="<?=$cmo_response["EmptyDistance"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-ClientReference1">Client Reference 1</label>
      <input id="cmo-ClientReference1" type="text" name="ClientReference1" placeholder="" value="<?=$cmo_response["ClientReference1"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-ClientReference2">Client Reference 2</label>
      <input id="cmo-ClientReference2" type="text" name="ClientReference2" placeholder="" value="<?=$cmo_response["ClientReference2"]?>">
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Route">Route Information</label>
      <textarea id="cmo-Route" name="Route" placeholder=""><?=$cmo_response["Route"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <label for="cmo-FurtherRequirements">Further Requirements</label>
      <textarea id="cmo-FurtherRequirements" name="FurtherRequirements" placeholder=""><?=$cmo_response["FurtherRequirements"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <label for="cmo-Notes">Additional Notes</label>
      <textarea id="cmo-Notes" name="Notes" placeholder=""><?=$cmo_response["Notes"]?></textarea>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Quantity">Quantity</label>
      <input id="cmo-Quantity" type="number" name="Quantity" placeholder="" min="0" step="1" required value="<?=$cmo_response["Quantity"]?>">
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <label for="cmo-Seats">Number of Passengers</label>
      <input id="cmo-Seats" type="number" name="Seats" placeholder="" min="0" step="1" required value="<?=$cmo_response["Seats"]?>">
    </div>
    <div class="cmo-form-group cmo-select-group cmo-form-group-required">
      <label for="cmo-VehicleType">Vehicle Type</label>
      <select id="cmo-VehicleType" name="VehicleType" required>
        <option value="" disabled <?=$cmo_response["VehicleType"] == "" ? 'selected' : ''?>>Vehicle Type</option>
        <?php foreach ($cmo_vehicle_types as $i => $cmo_vehicle_type): ?>
        <option value="<?=strlen($cmo_vehicle_values[$i]) > 10 ? substr($cmo_vehicle_values[$i], 0, 10) : $cmo_vehicle_values[$i]?>" <?=$cmo_response["VehicleType"] == $cmo_vehicle_values[$i] ? 'selected' : ''?>><?=$cmo_vehicle_type?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="cmo-form-group cmo-select-group cmo-form-group-required">
      <label for="cmo-Notes">Where did you hear about Belle Vue?</label>
      <select id="cmo-Notes" name="Notes" required>
        <option value="" disabled <?=$cmo_response["Notes"] == "" ? 'selected' : ''?>>Please Select One</option>
        <?php foreach ($cmo_learn_about as $val): ?>
        <option value="<?=$val?>" disabled <?=$cmo_response["Notes"] == $val ? 'selected' : ''?>><?=$val?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="cmo-form-group cmo-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>