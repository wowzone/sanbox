<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form</title>
</head>
<body>
<form name="form" action="" method="post">
  <strong>PERSONAL DATA</strong><br>
  Be sure to fill in all spaces that are marked with an asterisk ( * ). These are required fields and your registration cannot be processed without this information.<br>
  <li>
    <label for="name">(*)Full Legal Name:</label>
    <input id="name" name="name" required="" size="50" type="text" placeholder="Your Name" />
  </li>
  <li>
    <label for="email">(*)E-Mail:</label>
    <input id="email" name="email" required="" type="email" placeholder="Your E-Mail" />
  </li>
  <label for="phone">(*)Primary Telephone:</label>
  <input id="pphone" name="pphone" required="" size="30" type="text" placeholder="Telephone" />
  <li>
    <label for="ophone">(*)Secondary Telephone:</label>
    <input id="ophone" name="ophone" required="" size="30" type="text" placeholder="Telephone" />
  </li>
  <li>
    <label for="street">(*)Best Time to call:</label>
    <label for="select"></label>
    Morning
    <input id="radio" name="call" type="radio" value="morning" />
    <label for="call"> Afternoon
      <input id="radio2" name="call" type="radio" value="Afternoon" />
      <br>
      Night
      <input id="radio3" name="call" type="radio" value="Night" />
    </label>
  </li>
  <li> Marital Status:<br>
    <select name="status">
      <option selected="selected" value="0">-Select-</option>
      <option value="Married">Married</option>
      <option value="Single">Single</option>
      <option value="Divorce">Divorce</option>
      <option value="Widowed">Widowed</option>
    </select>
  </li>
  <br>
  <h3>Please fill out the BTS investment partner form:</h3>
  <br>
  <li>
    <label for="ybiz">(*)How many years have you been in business?</label>
    <input type="number" name="ybiz" id="ybiz">
  </li>
  <li>
    <label for="annual"> Do you need debt or equity (Funding) ?</label>
    <select name="annual">
      <option selected="selected" value="0">-Select-</option>
    </select>
    <select name="annual">
      <option value="Yes">Yes</option>
    </select>
    <select name="annual">
      <option value="No">No</option>
    </select>
  </li>
  <li>
    <label for="turnover">(*) Annual turnover?</label>
    <input type="number" name="turnover" id="turnover">
  </li>
  <li>
    <label for="owners"> (*)How many principal/owners are in the organization that you are seeking capitol for?</label>
    <input type="text" name="owners" id="owners">
  </li>
  <li>
    <label for="looking">(*)What are you looking for?</label>
    <input type="text" name="looking" id="looking">
  </li>
  <li>
    <label for="bankruptcy"> (*)Have you ever failed for bankruptcy as an individual or as a business?</label>
    <select name="bankruptcy">
      <option selected="selected" value="0">-Select-</option>
    </select>
    <select name="bankruptcy">
      <option value="Yes">Yes</option>
    </select>
    <select name="bankruptcy">
      <option value="No">No</option>
    </select>
  </li>
  <hr />
  <input id="button" name="button" type="submit" value="Submit Form" />
</form>
</body>
</html>