<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingad Student Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f3ed; color: #263238; margin: 0; padding: 36px 20px; }
        .card { max-width: 680px; margin: auto; background: #fff; padding: 34px; border-left: 7px solid #d86b35; box-shadow: 0 8px 24px rgba(38, 50, 56, .14); }
        h1 { margin-top: 0; color: #a54b24; }
        .row { padding: 10px 0; border-bottom: 1px solid #eadfd5; }
        .label { display: inline-block; width: 130px; font-weight: 700; }
        nav { margin-top: 28px; }
        a { color: #a54b24; font-weight: 700; margin-right: 18px; }
    </style>
</head>
<body>
    <main class="card">
        <h1>Lingad Student Profile</h1>
        <div class="row"><span class="label">Student ID</span><?= htmlspecialchars($student_id, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Name</span><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Course</span><?= htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Year Level</span><?= htmlspecialchars($year, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Section</span><?= htmlspecialchars($section, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Email</span><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Address</span><?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="row"><span class="label">Skills</span><?= htmlspecialchars($skills, ENT_QUOTES, 'UTF-8'); ?></div>
        <nav>
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #eef2f3; padding: 40px; }
        .profile-card { background: white; max-width: 500px; margin: auto; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h1 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        p { font-size: 16px; color: #555; line-height: 1.5; }
        nav { margin-top: 20px; text-align: center; }
        nav a { margin: 0 15px; text-decoration: none; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1>Student Information</h1>
        <p><strong>Student ID:</strong> {{ student_id }}</p>
        <p><strong>Name:</strong> {{ name }}</p>
        <p><strong>Course:</strong> {{ course }}</p>
        <p><strong>Year Level:</strong> {{ year }}</p>
        <p><strong>Section:</strong> {{ section }}</p>
        <p><strong>Email:</strong> {{ email }}</p>
        <p><strong>Address:</strong> {{ address }}</p>
        <p><strong>Skills:</strong> {{ skills }}</p>
        
        <nav>
            <a href="<?= site_url('student'); ?>">Home</a> | 
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>