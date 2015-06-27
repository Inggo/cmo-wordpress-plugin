<?php defined('ABSPATH') or die(); ?>
<div class="cmo-form-container">
  <form name="frmDistinctive" class="cmo-form" method="post" action="<?=$a['action']?>">
    <?php if ($full): ?>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Send Quotation Email?</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="True"> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="SendQuotationEmail" value="False"> No</label>
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Title" placeholder="Title">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Initials" placeholder="Initials"> 
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Surname" placeholder="Surname">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="Firstname" placeholder="First Name" required>
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="Salutation" placeholder="Salutation">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Department" placeholder="Department"> 
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Company" placeholder="Company">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address1" placeholder="Address Line 1">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address2" placeholder="Address Line 2">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address3" placeholder="Address Line 3">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Address4" placeholder="Address Line 4">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="Postcode" placeholder="Postal Code">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="TelNo" placeholder="Telephone Number">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="FaxNo" placeholder="Fax Number">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="email" name="Email" placeholder="Email Address" required>
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="Description" placeholder="Quotation Request">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="StartDateTime" placeholder="Start Date/Time (dd/mm/yyyy hh:ss)">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="PositionDateTime" placeholder="Position Date/Time (dd/mm/yyyy hh:ss)">
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="PickupDateTime" placeholder="Pickup Date/Time (dd/mm/yyyy hh:mm)" required>
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="Pickup" placeholder="Pickup Place" required>
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="PickupLatitude" placeholder="Pickup Latitude">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="PickupLongitude" placeholder="Pickup Longitude">
    </div>
    <div class="cmo-form-group">
      <textarea name="PickupInstructions" placeholder="Pickup Instructions"></textarea>
    </div>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Single Journey?</label>
      <label class="cmo-radio-label"><input type="radio" name="SingleJourney" value="True"> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="SingleJourney" value="False"> No</label>
    </div>
    <div class="cmo-form-group cmo-radio-group">
      <label class="cmo-radio-group-heading">Vehicle To Stay?</label>
      <label class="cmo-radio-label"><input type="radio" name="VehicleToStay" value="True"> Yes</label>
      <label class="cmo-radio-label"><input type="radio" name="VehicleToStay" value="False"> No</label>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="text" name="Destination" placeholder="Destination" required>
    </div>
    <?php if ($full): ?>
    <div class="cmo-form-group">
      <input type="text" name="DestinationLatitude" placeholder="Destination Latitude">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="DestinationLongitude" placeholder="Destination Longitude">
    </div>
    <div class="cmo-form-group">
      <textarea name="DestinationInstructions" placeholder="Destination Instructions"></textarea>
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ArrivalDateTime" placeholder="Arrival Date/Time (dd/mm/yyyy hh:mm)">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="LeaveDateTime" placeholder="Leave Date/Time (dd/mm/yyyy hh:mm)">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="BackDateTime" placeholder="Back Date/Time (dd/mm/yyyy hh:mm)">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="FinishDateTime" placeholder="Back Date/Time (dd/mm/yyyy hh:mm)">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="Passengers" placeholder="Passengers" min="0" step="1">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="Distance" placeholder="Distance" min="0">
    </div>
    <div class="cmo-form-group">
      <input type="number" name="EmptyDistance" placeholder="Empty Distance" min="0">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ClientReference1" placeholder="Client Reference 1">
    </div>
    <div class="cmo-form-group">
      <input type="text" name="ClientReference2" placeholder="Client Reference 2">
    </div>
    <div class="cmo-form-group">
      <textarea name="Route" placeholder="Route Information"></textarea>
    </div>
    <div class="cmo-form-group">
      <textarea name="FurtherRequirements" placeholder="Further Requirements"></textarea>
    </div>
    <div class="cmo-form-group">
      <textarea name="Notes" placeholder="Additional Notes"></textarea>
    </div>
    <?php endif; ?>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="number" name="Quantity" placeholder="Quantity" min="0" step="1" required>
    </div>
    <div class="cmo-form-group cmo-form-group-required">
      <input type="hidden" name="Seats" placeholder="Seats" min="0" step="1" required>
    </div>
    <div class="cmo-form-group cmo-select-group cmo-form-group-required">
      <select name="VehicleType" required>
        <option value="" disabled selected>Vehicle Type</option>
        <?php foreach ($a['vehicle_types'] as $vehicle_type): ?>
        <option value="<?=$vehicle_type?>">><?=$vehicle_type?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="cmo-form-group cmo-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>