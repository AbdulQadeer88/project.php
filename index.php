
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav {
            background-color: #f8f9fa;
            padding: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #495057;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #007bff;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .dashboard-card {
            width: 300px;
            padding: 20px;
            margin: 15px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #b3e0f2; /* Change this color to your desired light blue */
            transition: transform 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <header>
        <h1>Doctor Appointments </h1>
    </header>
    <?Php include("nav.php");?>
    <section class="bg-dark">
    <h2 class="text-white">Welcome</h2>
    <img src="image/img3.jpg" class="img-fuild"  width="1100" height="350"  alt="">
    </section>
    <section class="mt-3">
        <div class="dashboard-container">
            <div class="dashboard-card">
                <h3>Doctor</h3>
                <img src="image/img1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dr.Abdul Qadeer</h5>
                    <h5 class="card-title">Heart specialist <br>MBBS <br></h5>
                    <p class="card-text">Meet our dedicated cardiologist, a compassionate expert specializing in the intricacies of heart health. With a wealth of experience, our cardiologist is committed to providing personalized care, from preventive measures to advanced cardiac treatments</p>
                    <a href="appointment.php" class="btn btn-primary">Profile</a>
                </div>
                <!-- Add content related to recent document uploads -->
            </div>  
           

            <div class="dashboard-card">
                <h3>Doctor</h3>
                <img src="image/img5.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dr.Rao Huzaifa </h5>
                    <h5 class="card-title">Nephrologist specialist <br>MBBS <br></h5>
                    <p class="card-text">Specializing in the diagnosis and treatment of kidney-related conditions, our expert combines compassion with cutting-edge expertise. Whether addressing kidney diseases or providing preventive guidance.</p>
                    <a href="appointment.php" class="btn btn-primary">Profile</a>
                </div>
                <!-- Add content related to recent document uploads -->
            </div>

            <div class="dashboard-card">
                <h3>Doctor</h3>
                <img src="image/img6.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dr.Shahzad Sattar</h5>
                    <h5 class="card-title">Orthopedic specialist <br>MBBS <br></h5>
                    <p class="card-text">Specializing in the musculoskeletal system, they bring expertise in treating bone, joint, and soft tissue conditions. From fractures to joint replacements, our orthopedic specialist is committed to restoring mobility and alleviating discomfort</p>
                    <a href="appointment.php" class="btn btn-primary">Profile</a>
                </div>
                <!-- Add content related to user's profile -->
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div>
            <img src="image/img7.jpg" alt="">
        </div>
        <div class="col-9" ><p><h3 class="text-white">
        Welcome to our state-of-the-art Doctor Appointment Management System, 
        your one-stop solution for hassle-free healthcare scheduling. 
        We understand that your time is precious, and your health is a top priority.
        That's why we've created a user-friendly platform to simplify the process of booking appointments 
        with your preferred healthcare professionals.
        </h3></p>
        </div>
    </section>

    <footer>
        &copy; Abdul Qadeer <br>
        &copy; Doctor Appointment 
    </footer>

    
</body>
</html>
