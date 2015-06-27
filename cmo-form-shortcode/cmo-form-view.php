<?php
defined('ABSPATH') or die();
global $cmo_response;
?>
<div class="cmo-form-container">
  <form name="frmDistinctive" class="cmo-form" method="post" action="<?=$a['action']?>">
    <?php if ($full): ?>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Send Quotation Email?</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="True" <?=$cmo_response['SendQuotationEmail'] == "True" ? 'checked':''?>> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="False" <?=$cmo_response['SendQuotationEmail'] == "False" ? 'checked':''?>> No</label>
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Title" placeholder="Title" value="<?=$cmo_response["ClientTitle"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Initials" placeholder="Initials" value="<?=$cmo_response["Initials"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Surname" placeholder="Surname" value="<?=$cmo_response["Surname"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="Firstname" placeholder="First Name" required value="<?=$cmo_response["Firstname"]?>">
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="Salutation" placeholder="Salutation" value="<?=$cmo_response["Salutation"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Department" placeholder="Department" value="<?=$cmo_response["Department"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Company" placeholder="Company" value="<?=$cmo_response["Company"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address1" placeholder="Address Line 1" value="<?=$cmo_response["Address1"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address2" placeholder="Address Line 2" value="<?=$cmo_response["Address2"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address3" placeholder="Address Line 3" value="<?=$cmo_response["Address3"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address4" placeholder="Address Line 4" value="<?=$cmo_response["Address4"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Postcode" placeholder="Postal Code" value="<?=$cmo_response["Postcode"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="TelNo" placeholder="Telephone Number" value="<?=$cmo_response["TelNo"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="FaxNo" placeholder="Fax Number" value="<?=$cmo_response["FaxNo"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="email" name="Email" placeholder="Email Address" required value="<?=$cmo_response["Email"]?>">
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="Description" placeholder="Quotation Request" value="<?=$cmo_response["Description"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="StartDateTime" placeholder="Start Date/Time (dd/mm/yyyy hh:ss)" value="<?=$cmo_response["StartDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="PositionDateTime" placeholder="Position Date/Time (dd/mm/yyyy hh:ss)" value="<?=$cmo_response["PositionDateTime"]?>">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="PickupDateTime" placeholder="Pickup Date/Time (dd/mm/yyyy hh:mm)" required value="<?=$cmo_response["PickupDateTime"]?>">
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="Pickup" placeholder="Pickup Place" required value="<?=$cmo_response["Pickup"]?>">
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="PickupLatitude" placeholder="Pickup Latitude" value="<?=$cmo_response["PickupLatitude"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="PickupLongitude" placeholder="Pickup Longitude" value="<?=$cmo_response["PickupLongitude"]?>">
    </div>
    <div class="cmo-form-group">
      <textarea name="PickupInstructions" placeholder="Pickup Instructions"><?=$cmo_response["PickupInstructions"]?></textarea>
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
      <input type="text" name="Destination" placeholder="Destination" required value="<?=$cmo_response["Destination"]?>">
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="DestinationLatitude" placeholder="Destination Latitude" value="<?=$cmo_response["DestinationLatitude"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="DestinationLongitude" placeholder="Destination Longitude" value="<?=$cmo_response["DestinationLongitude"]?>">
    </div>
    <div class="cmo-form-group">
      <textarea name="DestinationInstructions" placeholder="Destination Instructions"><?=$cmo_response["DestinationInstructions"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ArrivalDateTime" placeholder="Arrival Date/Time (dd/mm/yyyy hh:mm)" value="<?=$cmo_response["ArrivalDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="LeaveDateTime" placeholder="Leave Date/Time (dd/mm/yyyy hh:mm)" value="<?=$cmo_response["LeaveDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="BackDateTime" placeholder="Back Date/Time (dd/mm/yyyy hh:mm)" value="<?=$cmo_response["BackDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="FinishDateTime" placeholder="Back Date/Time (dd/mm/yyyy hh:mm)" value="<?=$cmo_response["FinishDateTime"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="Passengers" placeholder="Passengers" min="0" step="1" value="<?=$cmo_response["Passengers"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="Distance" placeholder="Distance" min="0" value="<?=$cmo_response["Distance"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="EmptyDistance" placeholder="Empty Distance" min="0" value="<?=$cmo_response["EmptyDistance"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ClientReference1" placeholder="Client Reference 1" value="<?=$cmo_response["ClientReference1"]?>">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ClientReference2" placeholder="Client Reference 2" value="<?=$cmo_response["ClientReference2"]?>">
    </div>
    <div class="cmo-form-group">
      <textarea name="Route" placeholder="Route Information"><?=$cmo_response["Route"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <textarea name="FurtherRequirements" placeholder="Further Requirements"><?=$cmo_response["FurtherRequirements"]?></textarea>
    </div>
    <div class="cmo-form-group">
      <textarea name="Notes" placeholder="Additional Notes"><?=$cmo_response["Notes"]?></textarea>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="number" name="Quantity" placeholder="Quantity" min="0" step="1" required value="<?=$cmo_response["Quantity"]?>">
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="hidden" name="Seats" placeholder="Seats" min="0" step="1" required value="<?=$cmo_response["Seats"]?>">
    </div>
    <div class="cmo-form-group cmo-select-group cmo-form-group-required">
      <select name="VehicleType" required>
        <option value="" disabled <?=$cmo_response["VehicleType"] == "" ? 'selected' : ''?>>Vehicle Type</option>
        <?php foreach ($a['vehicle_types'] as $vehicle_type): ?>
        <option value="<?=$vehicle_type?>"> <?=$cmo_response["VehicleType"] == $vehicle_type ? 'selected' : ''?>><?=$vehicle_type?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="cmo-form-group cmo-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>