<!DOCTYPE html>
<html lang="en">

<head>
  <title>P2F SEMI |  Creating Silos is the Biggest Risk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ----------------------------fonts--------------------------------------------------------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
  <!-- Font awesome --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- ----------------------- css------------------------------------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
  <link rel="stylesheet" href="css/nav.css"> 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/internal.css">
  <!---------------------------css end-------------------------------------------------------->
</head>

<body>

<div class="main-Div align-items-center">
	   
       <!---------------------------header------------------------------------------------------------------->
  
				<?php include('include/header.php')?> 
  <!---------------------------------header end-------------------------------------------------------------->
         
      <!-- banner section --> 
		<div class="container">
			<div class="row d-flex justify-align-bottom ">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro-content ">
					  <h2>Creating Silos is the Biggest Risk</h2>
					  <nav aria-label="breadcrumb">
						 <ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Creating Silos is the Biggest Risk </li>     
						 </ol>
					  </nav>
				   </div>
				</div>
			</div>
      </div> 
  </div> 
      <!-- banner section -->

  

<!-- contact-section -->
        <section class="news-section pd-tb news_page">
            <div class="container">
                <div class="row" id="news-co">
                    <div class="col-md-12">
                        <div class="news-content">
                            <h3>Creating Silos is the Biggest Risk</h3>
                            <p><strong>Creating and continuing with technical silos within ASIC execution is a bad idea!</strong><br>Creating and continuing with technical silos within ASIC execution is a big mistake.  An ASIC design flow can be easily compartmentalized into several functions.  These functions can be – Synthesis, Constraint development, Test insertion, Test verification, Formal verification, Floor-planning, Placement & Routing, STA, Power insertion, Power analysis, DRC, LVS etc.    Add to this, the separation between block level work and chip/top level work.  Companies often fall into the trap of looking at ASIC execution flow as transfer among all these functions.  Management often divides their teams into these different functions and maintains it that way.  Reasons for doing this is perhaps the inherent intuitiveness of this structure, ease of resource planning and allocation, ease of project planning and most importantly growth of COEs (center of excellence), since engineers within a function become better and better at it just by doing it over and over. ASIC project execution then becomes a daisy chain of these functions, more or less, with internal transfer of design data back and forth among them.</p>
                            <p>This approach has more cons than pros.  First, it severely restricts the growth of individual engineers.  They get more and more bracketed into their function, as it becomes their sole expertise over time.  They do not get overall perspective and even understanding of entire ASIC design.  Their function becomes their comfort zone. Since their peers and the company management start regarding them as “experts” in that function, it is natural for the engineers to feel respected. But what they do not realize is that it typecasts them over the years.  Within the ASIC engineering community, they get known as experts in that function only. Also, when companies deliberately or inadvertently create ÇOEs out of individuals (centers of excellence), they become heavily dependent on them.  These COEs may view themselves as irreplaceable, which can quickly become a management nightmare. They can also be bottlenecks in project schedules based on their bandwidth and/or attitude.</p>
                            <p>Technically speaking, ASIC design is not a chain of compartments.  The functions listed above are heavily interdependent.   Synthesis results are heavily dependent on Physical design and timing constraints and are measured using STA.  Synthesis engineer who is also good at Physical Design and STA is a great asset. DFT is often treated as separate function, independent of physical design or STA. But test insertion impacts physical design.  Test constraints and test STA are as important as their functional counterparts.  A Physical Design engineer, who has experience in DFT, understands the test structures and test constraints much better and is able to incorporate them efficiently in the physical domain.  Sometimes STA engineers are treated as separate entity and are handed off SPEF, netlist and are told to run STA and report results back to PD engineers, who then create timing ECOs and apply those in.  Instead, an engineer who is great at Physical Design and STA both, can not only perform all the tasks and save valuable TAT, but it also learns how things influence each other. Power is again one of those functions that is treated separately.   These engineers are assigned to do power estimation and power analysis.  Sometimes power insertion is also handled by them. Others in the team hand over design data to them and wait for them to perform their tasks.  Instead, a Physical Design engineer, who can not only insert power structures, but also do power analysis and fix the issues, is a great strength for the team.  Same thing with DRC, LVS.  These engineers are often treated as special function and other engineers never get a chance to run DRC, LVS on their own.  An engineer who can stream out GDSII, run DRC, LVS and apply fixes all by himself or herself saves valuable TAT.</p>
                            <p>Companies and management are much better off if they break the technical silos, allow engineers to work in different functions and build a much more ‘horizontal’ team over the years.  Yes, it takes time and it involves risks – like allowing the learning curve for engineers, but one ends up having a much more technically solid and most importantly, technically satisfied team.  It also spreads expertise across the whole team and so it avoids creation of unhealthy ‘centers of excellence’.  Over the time, this approach greatly impacts TAT and project schedules and saves thousands of dollars for the company. </p>
                            <p>But this is not only a management issue to solve.  Engineers need to take themselves out of their comfort zone, take risks, keep an open mind, keep aside their egos, enter a different ‘functional area’ and re-learn from scratch if need be!  Sure, their performance reviews will reflect their learning curve in the beginning, they may not get equal amount of respect as experts in their new functional area for some time, but they will end up being much more accomplished engineers over the years.  As their breadth and depth increases, they will be regarded as veterans in overall ASIC design and not only in a specific function. As a result, they will continue to get excellent opportunities in the semiconductor industry or even adjacent industries for a long time to come. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->
 
<!-----------------footer------------------------------>
  
				<?php include('include/footer.php')?> 
</body>

</html> 