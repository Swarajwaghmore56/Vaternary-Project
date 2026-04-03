<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We4 Healthcare</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f8fc;
        }

        .section {
            padding: 60px 15%;
        }

        h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
            font-size: 32px;
        }

        /* Cards */
        .card-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            text-align: center;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 28px rgba(0,0,0,0.12);
        }

        .card i {
            font-size: 40px;
            color: #0077ff;
            margin-bottom: 15px;
            display: inline-block;
            transition: 0.3s ease;
        }

        .card:hover i {
            transform: scale(1.15) rotate(5deg);
        }

        .title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .text {
            color: #555;
            font-size: 14px;
        }

        /* Team Section */
        .team {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
        }

        .team-box {
            background: white;
            padding: 20px 30px;
            border-radius: 15px;
            text-align: center;
            width: 200px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }

        .team-box:hover {
            transform: translateY(-8px);
        }

        .team-box h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <!-- Why Choose Us -->
    <section class="section">
        <h2>⭐ Why Choose We4 Healthcare</h2>

        <div class="card-wrapper">

            <div class="card">
                <i class="ri-award-line"></i>
                <div class="title">GMP & ISO Certified Products</div>
                <div class="text">Ensuring safe, reliable, and high-standard veterinary formulations.</div>
            </div>

            <div class="card">
                <i class="ri-user-heart-line"></i>
                <div class="title">Backed by Experts</div>
                <div class="text">Products developed and validated by pharmacists & veterinarians.</div>
            </div>

            <div class="card">
                <i class="ri-truck-line"></i>
                <div class="title">Pan-India Distribution</div>
                <div class="text">Efficient logistics ensuring timely delivery across the country.</div>
            </div>

            <div class="card">
                <i class="ri-time-line"></i>
                <div class="title">Prompt Customer Support</div>
                <div class="text">Dedicated support team ready to solve queries instantly.</div>
            </div>

            <div class="card">
                <i class="ri-lightbulb-flash-line"></i>
                <div class="title">Continuous Product Innovation</div>
                <div class="text">Regular R&D for upgraded formulations & new solutions.</div>
            </div>

        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <h2>👥 Our Team</h2>

        <div class="team">
            <div class="team-box">
                <h3>Director</h3>
            </div>

            <div class="team-box">
                <h3>CEO</h3>
            </div>

            <div class="team-box">
                <h3>Manager</h3>
            </div>
        </div>
    </section>

</body>
</html>
