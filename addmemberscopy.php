<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="addmemberscontroller.php">
<label for="member_name">Enter Family member name you want to add</label>

<input type="text" id="member_name" name="member_name" >

</p>
<p>
<label for="Proof_type">Select your choice of Proof</label>

<!--<input type="text" id="Proof_type" name="Proof_type" >-->

<select name="Proof_type" id="Proof_type">
  <option value="Aadhar Card">Aadhar Card</option>
  <option value="Pan Card">Pan Card</option>
  <option value="Voter-id card">Voter-id card</option>
  <option value="Passport">Passport</option>
</select>
</p>

<p>

<label for="Proof_ID_No">Enter Your Proof_ID_no</label>

<input type="number" id="Proof_ID_No" name="Proof_ID_No">
</p>



<button>Submit</button>
   </form>
</body>
</html>