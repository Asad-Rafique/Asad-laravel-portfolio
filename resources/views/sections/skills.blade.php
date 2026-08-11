<section class="skills" id="skills">
    <div class="container">

        <h2 class="section-title">
            Skills <span class="highlight">& Expertise</span>
        </h2>

        @php
        $skillBars = [
            ['emoji' => '🚀', 'name' => 'Laravel',     'percent' => 90],
            ['emoji' => '🐘', 'name' => 'PHP',          'percent' => 85],
            ['emoji' => '🍃', 'name' => 'MySQL',        'percent' => 80],
            ['emoji' => '🟨', 'name' => 'JavaScript',   'percent' => 88],
             ['emoji' => '🖌️', 'name' => 'jQuery',       'percent' => 90],
            ['emoji' => '🎨', 'name' => 'Tailwind CSS',          'percent' => 92],
            ['emoji' => '🅱️', 'name' => 'Bootstrap',   'percent' => 90],
            ['emoji' => '🔍', 'name' => 'HTML5',         'percent' => 95],
            ['emoji' => '🐙', 'name' => 'GitHub',       'percent' => 90],
            ['emoji' => '🖌️', 'name' => 'Deployment & Hosting',       'percent' => 90],
           ['emoji' => '🖌️', 'name' => 'WordPress',       'percent' => 90],
           ['emoji' => '🖌️', 'name' => 'Flutter',       'percent' => 90],
        ];
        @endphp

        <div class="skill-cards-grid">
            @foreach($skillBars as $skill)
            <div class="skill-card">
                <div class="skill-card-top">
                    <div class="skill-icon">{{ $skill['emoji'] }}</div>
                    <span class="skill-name">{{ $skill['name'] }}</span>
                </div>
                <div class="skill-bar-wrap">
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="{{ $skill['percent'] }}"></div>
                    </div>
                    <span class="skill-percent">{{ $skill['percent'] }}%</span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
