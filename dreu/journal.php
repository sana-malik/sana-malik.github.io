<?php include 'header.php';?>

<div id="content">
	<div class="box" id="w1">
		<div class="title"><h2>Week 1: June 8 - 12</h2></div>
		<div class="text"><p>So far, I am really enjoying being in the lab. I haven’t done much but I’m excited to get started on the research now that I know my project. Emily and Sara have been really helpful about making sure that we aren’t too overwhelmed and that we’re learning everything we need before we get started. I’m REALLY glad this isn’t one of those projects that you just get thrown into and are told “do.” We've been having a lot of meetings, and communication is excellent between everyone, so that's always a plus. After reading a paper about SWUM to get to know the software I'll be working on, a lot of the week was spent learning about Eclipse and software engineering tools in general, since that's a big part of the research. I have a better understanding of what needs to get done, so hopefully next week I will be able to make a dent in the research!</p></div>
	</div>
	
	<div class="box" id="w2">
		<div class="title"><h2>Week 2: June 15 - 19</h2></div>
		<div class="text"><p>Most of this week was just spent reading and learning more about the project. I reread the SWUM paper about 4 times! Since my project deals with software engineering tools, I spent a lot of time learning about the different kinds, how they are helpful, and how SWUM can be used to improve them. Specifically, I used Eclipse and did some tutorials to make my own plugin. I also installed SWUM on my computer, to see how it works and so I can use it for my research. I still hadn't gotten most the content up on this site so I spent Wednesay finishing it up so that I could submit it. On Tuesday evening, Lori had us all over for a picnic at her house. There was a ton of delicious food, and I wish I took pictures but I didn't have my camera that day! I want to make a gallery documenting the summer in pictures, but so far I haven't had time to do so. Hopefully I can get that set up sometime this week!</p></div>
	</div>
	
	<div class="box" id="w3">
		<div class="title"><h2>Week 3: June 22 - 26</h2></div>
		<div class="text"><p>This week I got to move on from reading to doing some actual research! I looked up differences between C++ and Java and how it would be different for SWUM to preform on each of these languages. I got some C++ open source code (Songbird, Firefox, and VLC) to start looking through. I decided to use Songbird to start with, and am currently rewriting it as java code so that I can run SWUM on it and see how it does. Emily won't be here next week so I have plenty to do before then! Hopefully I get a lot more done.</p></div>
	</div>	

<div class="box" id="w4">
		<div class="title"><h2>Week 4: June 29 - July 3</h2></div>
		<div class="text"><p>This week I continued to look up differences in Java/C++. In particular, I researched how enums are handled because there is such a big difference between how Java implements them and how C++ uses them. I also am using a simple Java program I found to annotate phrases on. I plan on converting the program to C++ and seeing if there are any major differences there. I have already taken a C++ program and translated it to Java so I could see how SWUM behaved on it. It worked pretty well, and this tells me that naming conventions are similar enough to not make that big a difference. I also began working on the final paper that is due at the end of the summer. I met with Lori & Sara, and we wrote up a draft of the outline. This helped me a lot in visualizing the project, and also helped calm fears I had about writing the paper! I started writing the introduction section for this.</p></div>
	</div>	

<div class="box" id="w5">
	<div class="title"><h2>Week 5: July 6 - 10</h2></div>
	<div class="text"><p>This week I am moving onto actually implementing SWUM for C++. Since SWUM's underlying structure is a model of the program, I looked for an Abstract Syntax Tree (AST) for C++ to use in Eclipse. So far, it seems a lot less advanced than the Java AST so that is definitely going to be an issue. I found a helpful Java program that uses the C++ AST and visits all the nodes. I used this to write my own very basic version of the ASTVisitor so that I could how a C++ program is structured. I feel like this week was a turning point for me since I do way better with implementation than theory so I'm excited to see what else I get to code.</p></div>
</div>

<div class="box" id="w6">
	<div class="title"><h2>Week 6: July 13 - 17</h2></div>
	<div class="text"><p>I started off the week with working on my introduction more. I haven't made as much headway into the paper as I should have, but hopefully I'll get there. I finally finished the preliminary version of the C-ASTVisitor. Using the results, I constructed a graphical version of the tree that shows the relationships between all the nodes. I think this will help me when I need to pick out all the information to use in SWUM. After finishing the basic implentation, Emily gave me a brief walkthrough of the SWUM implementation so I can start acquainting myself with its code. Next week I will try to use the phrase generation methods of SWUM on the C-AST.</p></div>
</div>

<div class="box" id="w7">
	<div class="title"><h2>Week 7: July 20 - 24</h2></div>
	<div class="text"><p>This week I began working on extracting relevent information from the AST for SWUM. I had a lot of issues getting this to work, and it ended up being such a simple problem but it took me 2 days to figure out! I wanted to get SWUM working for C++, so I started out by making some dummy variables. I didn't realize though, that SWUM wouldn't like the dummy variables I made (because one of them was an empty array). So after getting that to finally work, I was well on my way. I had gotten all the easy information we needed, like the method name, return type, and whether or not it was a contrsuctor or  boolean type. Then I ran into an issue with the parameters. After meeting with Emily, she suggested making a visitor for the AST that only visits the parameters of each node and that ended up working great. It ended up being a really easy and practical solution.</p></div>
</div>

<div class="box" id="w8">
	<div class="title"><h2>Week 8: July 27 - 31</h2></div>
	<div class="text"><p>I finished up the C++ ASTVisitor this week. SWUM now has all the information it needs to generate phrases for methods in a simple C++ program. Now that I have this implentation, I will start adding more to the C++ program to see how SWUM behaves with other features, and analyze the results. I am noting the problems C++ has, and changing the implementation to handle all these cases so that  it is gradually expanding. It's still in its baby stages, but I hope I can get a ton more features and have this implementation grow into a fully function C++ versio of SWUM. I'm not sure what steps to take next since I have finished the method implementation and we are saving fields for later, and those are the main two parts of SWUM so far. I'm sure I'll figure it out next week though because there's always work to be done! We also had a meeting on Thursday to discuss how to make a research poster. This reminds me that I need to get working on my paper! ahhh</p></div>
</div>

<div class="box" id="w9">
	<div class="title"><h2>Week 9: August 3 - 7</h2></div>
	<div class="text"><p>This week has been so hectic so far! We have just moved labs so we do n't have internet access on the research machines. I've mostly been doing work on my computer, and luckily we have wireless, so this hasn't affected me too much. However, I did want to start using the lab machine to run SWUMC on more than just one C++ program at a time, which I imagine my old little computer won't be able to handle! So I've put that on hold until I can access the code Emily has. I've been fine tuning my SWUM implementation in the meantime and analyzing the results in more detail. In order to exercise all parts of SWUM, I made a list of all branches of how SWUM makes decisions, so I can make sure my implementatoin of SWUM on C++ can do everything SWUM is intended to do! I've started implenting a way for my version of SWUM to visit all the files in a directory. I just remembered that SWUM already does this, so I will be sure to look at how so I can implement it in my version, too. Other than that, I've been working on my poster. We have a poster session next Wednesday, which is sooner than I thought so I've got to get moving.  </p></div>
</div>

<div class="box" id="w10">
     <div class="title"><h2>Week 10: August 10 - 14</h2></div>
	<div class="text"><p>This summer has gone by so quickly. It's our last week here and we have the poster & final papers to finish. I finished my <a href="poster.pdf">poster</a> on Tuesday and got it printed. In the afternoon we had a test run of our postser session to the grad students in the lab and Vijay. On Wednesday was the poster sesssion! Hopefully I'll have some of those pictures up soon, that Sara and my friend Amanda took. The poster session was a lot of fun, it was nice to talk to other people in the field who were interested in our project. Thursday and Friday were spent just writing writing writing! I was trying to get done the paper by the end of Friday, but that didn't work out so well so I'm finishing it up over the weekend and Emily and I will do the final editing on Monday.</p>
<p>This research experience has been so much fun, and I'm glad I got to do it. All the people I met made my experience so much better, and I'm glad I get to continue researching in the fall.</p></div>
</div>
<?php include 'footer.php'; ?>