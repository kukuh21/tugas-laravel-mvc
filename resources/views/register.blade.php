<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanber Book</title>
</head>
<body>
  <form action="{{ route('welcome') }}" method="POST">
    @csrf @method("POST")
  <h1>Buat Account Baru!</h1>
  <h3>Sign Up Form</h3>
    <p>First Name:</p>
    <input type="text" name="first_name">

    <p>Last Name:</p>
    <input type="text" name="last_name">

    <p>Gender</p>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br>

    <p>Nationality</p>
    <select name="national" id="national">
      <option value="Indonesia">Indonesia</option>
      <option value="Amerika">Amerika</option>
      <option value="Arab">Arab</option>
    </select>

    <p>Languange Spoken :</p>
    <input type="checkbox" id="bahasaindonesia" name="bahasaindonesia" value="Bahasa Indonesia">
    <label for="bahasaindonesia"> Bahasa Indonesia</label><br>

    <input type="checkbox" id="english" name="english" value="English">
    <label for="english"> English</label><br>

    <input type="checkbox" id="other" name="other" value="Other">
    <label for="other"> Other</label><br>

    <p>Bio</p>
    <textarea name="bio" id="bio" cols="30" rows="6"></textarea>
    <br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
