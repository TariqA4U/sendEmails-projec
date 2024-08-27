<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        onload="this.onload=null;this.rel='stylesheet'"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Email Template</title>
    <style>
        body {
            font-family: Calibri, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-image: url('images/Component 1.png');
            background-repeat: no-repeat;
            background-size: cover;
            width: 485px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .headSection {
            border: red;
            height: 97px;
            background: #05f1be;
        }

        .dot {
            height: 80px;
            width: 80px;
            background-color: #070e31;
            border-radius: 50%;
            display: inline-block;
            position: absolute;
            margin-top: 17px;
            margin-left: 10px;
        }

        .dot2 {
            height: 80px;
            width: 80px;
            background-color: #070e31;
            border-radius: 50%;
            margin-top: 17px;
            margin-left: 10px;
        }

        .content {
            background: white;
            padding: 20px;

        }

        h1 {
            color: #333;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #05f1be;
            color: black;
            font-weight: bolder;
            border-radius: 5px;
            border: 1px solid;

        }

        .social-links {
            display: flex;
        }

        .social-link {
            display: inline-block;
            margin-right: 10px;
            color: #333;
            /* Adjust color as needed */
            font-size: 24px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            color: whitesmoke;
            font-size: 12px;
            margin-bottom: 7px;
        }

        .nav-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;

        }

        .nav-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .nav-buttons a:hover {
            background-color: #0056b3;
        }

        .nav-buttons .next {
            right: 20px;
        }
    </style>
</head>

<body>


    <div class="nav-buttons">
        <a href="email2.html" class="next">Next &rarr;</a>
    </div>

    <div class="email-container">

        <div class="content">
            <div class="headSection">
                <div style="position: absolute; margin-top: 5px;"><a href="https://www.apply4u.co.uk/" target="_blank"
                        rel="noopener noreferrer"><img src="images/A(6).png" alt="" width="90" height="90"></a>
                </div>

                <div style="padding-top: 4px;
                    padding-right: 10px;
                     font-size: 20px; text-align: right; font-family: Poppins;">Claim your</div>
                <div style="
                    padding-right: 10px;
                    ;font-weight: 800; text-align: right; font-size: 21px;  color: #0e1c5d;
                    font-weight: 900; font-family: Poppins;">Free Company Profile.</div>
                <div style="
                    padding-right: 10px; font-size: larger; text-align: right;
                    "><span style="font-weight: 700;  font-family: Poppins;">Get Started </span>With
                    Apply4U Today!</div>


            </div>
            <p style="padding-top: 46px;">Hello {First name},</p>
            <p>We're excited to offer you a <b>complimentary company profile</b> on Apply4U, your helpful job site and
                professional networking platform. We've pre-created your profile using public details to <b>save your
                    time</b>. Simply review and activate, or delete it if you prefer.</p>
            <div class="button">Review Profile</div>
            <h1 style="text-align: center; font-size: 36px; font-weight: bolder;  color: #0e1c5d;">Why Choose Apply4U?
            </h1>

            <ul class="fa-ul" style="--fa-li-width: 6em; --fa-li-margin: 5em; ">
                <li style="padding-bottom: 10px;"> <span class="fa-li"><img src="images/Unlimited Searches.png" width="80"
                            height="80" alt=""></span>
                    <div style="font-size: 30px;  color: #0e1c5d;"><b>Unlimited</b> Searches</div>Access over 500,000
                    CVs with 1,000+ new registrations daily
                </li>
                <li style="padding-bottom: 10px;"><span class="fa-li"><img src="images/Advertise Jobs For FRee.png" width="80"
                            height="80" alt=""></span>
                    <div style="font-size: 30px;  color: #0e1c5d;"><b>Advertise Jobs for Free</b></div>Reach over 3
                    million job seekers by posting your job adverts for 28 days on Apply4U.
                </li>
                <li style="padding-bottom: 10px;"><span class="fa-li"><img src="images/Smart Matching.png" width="80"
                            height="80" alt=""></span>
                    <div style="font-size: 30px;  color: #0e1c5d;">Smart<b> Matching </b></div>Automatically receive
                    matched CVs for the jobs you post, streamlining your hiring process.
                </li>
                <li style="padding-bottom: 10px;"><span class="fa-li"><img src="images/MultiBoard Posting.png" width="80"
                            height="80" alt=""></span>
                    <div style="font-size: 30px;  color: #0e1c5d;">Multi-Board <b>Posting</b></div>Feature your jobs on
                    Apply4U and sponsor them on other top job boards using our job distribution software!
                </li>
                <li style="padding-bottom: 10px;"><span class="fa-li"><img src="images/Search4Me.png" width="80" height="80"
                            alt=""></span>
                    <div style="font-size: 30px; font-weight: bolder; color: #0e1c5d;">Search4Me</div>Our cutting edge technology, HumaTec, and expert recruiters work together to search our extensive database and handpick the finest candidates tailored to your criteria.
                </li>
            </ul>
            <p>If you have any questions or need assistance feel free to contact me on <a href="tel:+923301758370"
                    style="color: #070e31;">0330 175 8370</a> and I’d be happy to
                help!</p>
            <p>Best Regards,</p>
            <span>
                <div style="font-weight: bolder; font-size: large;">Imran Mohamed</div>
                <div>Business Consultant</div>
                <div><span style="font-weight: bold;">Email:</span> <a
                        href="mailto:imran@apply4u.co.uk?subject=I’m%20interested%20in%20claiming%20my%20company%20profile.%20Please%20call%20me%20back"
                        style="color: #070e31;">
                        imran@apply4u.co.uk
                    </a>
                </div>
                <div><span style="font-weight: bold;">Tel:</span> <a href="tel:+442039945532"
                        style="color: #070e31;">+4420 3994 5532</a></div>
                <div><span style="font-weight: bold;">Web: </span>
                    <a style="color: black;" href="https://www.apply4u.co.uk/" target="_blank"
                        rel="noopener noreferrer">www.apply4u.co.uk</a>
                </div>
            </span>
            <div class="footer">
                <div style=" margin-top: 8px;"><a href="https://www.apply4u.co.uk/" target="_blank"><img src="images/A(6).png"
                            alt="" width="100" height="100"></a></div>

                <div style="width: 1px; background-color: #0e1c5d; height: 77px;  width: 209px; position: relative; right: -40px; border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;">
                    <div style="margin-top: 7px; margin-left: 15px;">
                        <div style="font-size: 20px; font-weight: bolder; margin-bottom: 5px; ">Follow Us </div>
                        <div class="social-links" style="gap: 5px;">
                            <a href="https://www.linkedin.com/company/apply4ukjobsearch/?originalSubdomain=uk"
                                class="social-link" target="_blank"><i class="fa-brands fa-linkedin"
                                    style="color: #2197bd;"></i></a>
                            <a href="https://www.instagram.com/apply4u_/" style="margin-top: 2px;" class="social-link"
                                target="_blank"><img src="images/colored-instagram-logo-new-removebg-preview.png" width="22"
                                    height="22" alt=""></a>
                            <a href="https://www.tiktok.com/@apply4u?lang=en" target="_blank" class="social-link"><i
                                    class="fa-brands fa-tiktok" style="color: whitesmoke;"></i></a>
                            <a href="https://www.facebook.com/apply4u.official/?locale=en_GB" target="_blank"
                                class="social-link"><i class="fa-brands fa-square-facebook"
                                    style="color: #74C0FC;"></i></a>



                            <!-- Add more social media icons as needed -->
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <a href="https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/32451360-39e0-11ef-8f73-52540088df93/330c5c3a09855286b846a6f9c05aaa8885f810ba/2?e=792%2BzGnokEsBiPeJWBi8NcBhrZR8Q7niqLuF7k2U4LyDNFfZcnq2EkTR2vGc3okVSVKZKSMmMk3uc39MwLS%2BTOye4JbJPM%2FfJVLtLsw1YkII0qETTbx24r5QpLlHYnyc"
                    style="text-decoration:none" target="_blank"
                    data-saferedirecturl="https://www.google.com/url?q=https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/32451360-39e0-11ef-8f73-52540088df93/330c5c3a09855286b846a6f9c05aaa8885f810ba/2?e%3D792%252BzGnokEsBiPeJWBi8NcBhrZR8Q7niqLuF7k2U4LyDNFfZcnq2EkTR2vGc3okVSVKZKSMmMk3uc39MwLS%252BTOye4JbJPM%252FfJVLtLsw1YkII0qETTbx24r5QpLlHYnyc&amp;source=gmail&amp;ust=1720809673379000&amp;usg=AOvVaw3Ioakx_wnkG2n9ikMEtVvM">
                    <span style="color:#368cd7;text-decoration:none"> <span> <img border="0" width="171" height="16"
                                src="https://ci3.googleusercontent.com/meips/ADKq_NZxaj9kNl8y6yupHJ2WzEecz-EGjHPgC-TmfKlsL835AaTMpLh7JixIFhsyhyfuhMOijzOPcJ4EHassFinRh2aRgbXsTEAlG_0W3_CGWsQcHYcGaKI_XxNkoscaV3ayoJdbiTOr17_HYY5WR8HhjQ=s0-d-e1-ft#https://emailsignature.trustpilot.com/signature/en-GB/3/5ad869fc089028000118a067/text.png"
                                style="max-height:16px;border:none" alt="Check out our reviews" class="CToWUd"
                                data-bit="iit"> </span> <br> <span> <img border="0" width="160" height="40"
                                src="https://ci3.googleusercontent.com/meips/ADKq_NY-yf_-5Jd4TISQspMNNPmlZADZFRO7HCOtr9DC1z44UyQusv34djD3Csvbfiz5G3hjLodjR-doDZHRBWW7UILUBHGkEfH-fqyR7yvGhOWHR560045_X_AAT-_reXCgFu0Ow2MeXmJiwdLpTvbingk=s0-d-e1-ft#https://emailsignature.trustpilot.com/signature/en-GB/3/5ad869fc089028000118a067/stars.png"
                                style="max-width:160px; width:100%; border:none" alt="Trustpilot Stars" class="CToWUd"
                                data-bit="iit"> </span> </span> </a>
                <br><a
                    href="https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/32451360-39e0-11ef-8f73-52540088df93/330c5c3a09855286b846a6f9c05aaa8885f810ba/2?e=792%2BzGnokEsBiPeJWBi8NcBhrZR8Q7niqLuF7k2U4LyDNFfZcnq2EkTR2vGc3okVSVKZKSMmMk3uc39MwLS%2BTOye4JbJPM%2FfJVLtLsw1YkII0qETTbx24r5QpLlHYnyc"
                    style="text-decoration:none" target="_blank"
                    data-saferedirecturl="https://www.google.com/url?q=https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/32451360-39e0-11ef-8f73-52540088df93/330c5c3a09855286b846a6f9c05aaa8885f810ba/2?e%3D792%252BzGnokEsBiPeJWBi8NcBhrZR8Q7niqLuF7k2U4LyDNFfZcnq2EkTR2vGc3okVSVKZKSMmMk3uc39MwLS%252BTOye4JbJPM%252FfJVLtLsw1YkII0qETTbx24r5QpLlHYnyc&amp;source=gmail&amp;ust=1720809673379000&amp;usg=AOvVaw3Ioakx_wnkG2n9ikMEtVvM">
                    <span> <img border="0" width="79" height="20"
                            src="https://ci3.googleusercontent.com/meips/ADKq_NYN6RrROcf0ShbQgQf7eOueA5_6yMlhcTw_XMBdyErCMf3bMyI9yY12rm-z7JhDsYaMOMW3LqBQhWyml16YI8DMyV0L2Q_yc_bsyAklVg=s0-d-e1-ft#https://emailsignature.trustpilot.com/brand/s/3/logo.png"
                            style="max-width:79px;width:100%;border:none" alt="Trustpilot Logo" class="CToWUd"
                            data-bit="iit"> </span> </a>
            </div>

            <div>
                <p style="text-align: justify;">
                    To manage your email alerts click <a
                        href="https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/9f3d6560-3f96-11ef-8272-5254007ea3ec/64798814ff380ffbc6ab24e5534c3c8876114e1e/2?e=x5SMcnjYNoIUQlE7ZnBBJvfLdGK45ptyXCSIY3tQ2eq6Ohny4m93HXA9FKkp7ZYkDqQxqF9ExHhAjYmRvKmzCupVz55JF5tNyL5Z2mCaPzfNodZ3fCofESEnA8pfwBCYLtj%2FPYEGT3GlKQBppPCRJHmE1%2FnNEF8CXmYOyrPV%2B48%3D"
                        style="color: #070e31;">here</a>
                    - If you no longer wish to receive emails from Apply4U.co.uk, you can unsubscribe <a
                        href="https://track.apply4u.com/ck1/2d6f.3847cc2d64f63f5d/9f3d6560-3f96-11ef-8272-5254007ea3ec/f84c8124026ab2f8fddd80552cefa044fc9d5fa7/2?e=x5SMcnjYNoIUQlE7ZnBBJvfLdGK45ptyXCSIY3tQ2eppYxxq68c%2Flb6FxhJf2SxmAKN%2F2htlMAnnXgBMmoKFgNWi9oMEJqX1%2BEYvTSWbti00xoiHO9k7i7FI4UZnDYKM5Bj41o2tkt%2FLL31ATQs2sQ8Goas8BjjAas0j3vJoDbB2H72q9cHnNVDVSROqMvqF"
                        style="color: #070e31;">here</a>. Apply4U
                    is an online community of verified professionals and recruitment platform that operates online job
                    sites and recruitment services to help candidates find jobs and companies / agencies find
                    candidates. We take data protection very seriously and understand the importance of protecting your
                    privacy and Personal Information. "Personal Information" is any information that identifies you as
                    an individual such as your name, date of birth, email address etc.

                </p>
            </div>
            <p style="font-size:14px;line-height:21px;text-align:center;margin:0;font-size:11px">Apply4U- Transputec
                House, 19 Heather Park Dr, London, Wembley HA0 1SS</p>
        </div>
    </div>
</body>

</html>