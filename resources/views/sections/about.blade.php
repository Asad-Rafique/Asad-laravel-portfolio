<section class="about" id="about">
    <div class="container">
        <h2 class="section-title">About <span class="highlight">Me</span></h2>

        <div class="about-grid">
            <div class="about-info">
                <p><strong>Name:</strong>Asad Rafique</p>
                <p><strong>Email:</strong>asadrafique280@gmail.com</p>

                <p class="about-bio">
                    I am a Full Stack PHP Laravel Developer with 4+ years of professional experience in designing, developing, and maintaining modern web applications. My expertise spans both *frontend and backend development*, allowing me to build complete, scalable, and high-performance solutions from concept to deployment.
                    Throughout my career, I have worked with startups and established companies, contributing to enterprise applications, business management systems, RESTful APIs, WordPress websites, and mobile application backends. I am passionate about writing clean, maintainable code and delivering solutions that solve real business problems. I'm a Full-Stack Web Developer from Pakistan, passionate about turning ideas into clean, user-friendly
                    digital products. I specialize in building scalable web applications using modern JavaScript frameworks,
                    focusing on writing maintainable code and delivering smooth, high-performance experiences for real users.
                    I thrive in collaborative environments and enjoy solving complex problems with elegant, efficient solutions.
                </p>
            </div>

            <div class="about-blocks">
                <div class="about-block">
                    <h3><i class="fas fa-briefcase"></i> Experience</h3>
                    <p>
                        Worked at <strong>Giffring – Saudi Arabia</strong>,
                        <strong>Tech Communication – Lahore, Pakistan</strong>,
                        <strong>Shara Web Solutions</strong>,
                        Developed and maintained scalable Laravel applications.
                        Designed and implemented secure RESTful APIs for mobile applications.
                        Built backend features for business management systems.
                        Optimized database performance and application security.
                        Collaborated remotely with international development teams.
                        WordPress Website Development
                        Custom WordPress Theme & Plugin Customization
                    </p>
                </div>


                <div class="about-block">
                    <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                    <p>
                        Studied <strong>BS Software Engineering</strong> Bachelor of Science in Software Engineering
                        The degree provided a strong foundation in software engineering principles, object-oriented programming, database systems,
                        software architecture, web technologies, software testing, and project management.
                    </p>
                </div>
            </div>
        </div>

        <h3 class="what-i-can-do-title">What I Can Do</h3>
        <div class="what-i-can-do">
            @php
            $capabilities = [
            ['icon' => 'fas fa-desktop', 'title' => 'Modern Frontend Experiences', 'desc' => 'Build awesome accessible UIs using HTML and CSS, Bootstrap focusing on clean layouts, smooth animations & responsive design.'],
            ['icon' => 'fas fa-plug', 'title' => 'APIs & Backend Logic', 'desc' => 'Design RESTful APIs with php and laravel, and work with databases to store and manage data efficiently.'],
            ['icon' => 'fas fa-globe', 'title' => 'End-to-End Web Apps', 'desc' => 'Take a project from idea to deployment using GitHub, manage tasks and integrations, ensuring finalized and functional ship to date.'],
            ['icon' => 'fas fa-users', 'title' => 'Teamwork & Problem-Solving', 'desc' => 'Collaborate using Git, meet deadlines, and bring clarity to deliver reliable solutions on time.'],
            ];
            @endphp

            @foreach($capabilities as $cap)
            <div class="capability-card">
                <i class="{{ $cap['icon'] }}"></i>
                <h4>{{ $cap['title'] }}</h4>
                <p>{{ $cap['desc'] }}</p>
            </div>
            @endforeach
        </div>

        
</section>