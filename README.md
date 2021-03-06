# such-strange-dog
Such Strange Dog Training Promotional Website

## Milestone 1 feedback
Cool! Is "Such Strange Dog" your own business? Really looking forward to this project take shape. Love the name. :D

Your idea is solid and your Use Case is good and informative. Additional details in the Persona and Goal(s) could go a long way in the design and development of the site, particularly in regards to features and functionality.

There are some issues I see between your GitHub repo and your deployment. I see that your deployment has the proper directory structure, but this is not reflected on GitHub. Please see "Edits &amp; Suggestions" below. Your HTML looks good.

Your Milestone passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin on [Milestone 2 &alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/) 

### Edits &amp; Suggestions
- There's some strange things going on between your deployment and GitHub repo. It looks like your current work has not been committed and pushed! Senator Arlo reminds you to please to commit early and often. This is very important.
- I don't see your `.gitignore`, `LICENSE`, or `README.md` uploaded to bootcamp-coders. Make sure *Automatic Upload* is turned on in your Deployment settings. It's important for a project to be properly synced up.

## Milestone 2a feedback
Excellent work on your wireframes, and you have some cool layout ideas here. I would like to hear about what your layout and UI design ideas are in more detail since it's a bit unclear to me based on the wireframes alone how the different sections of the site will be structured and how the transitions between each section will work.

Be careful regarding the amount or horizontal space on narrow screens - this _could_ affect your top nav on mobile. Also, I'm not sure you need both a navigation menu and the navigation tiles on the "splash" view. This is a little bit redundant. Don't forget to plan to include a contact form.

I think this is going to be a beautiful layout, and I'm looking forward to seeing your project take shape. Your Milestone 2a passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric). You're now clear to begin development on your PWP.

### Edits &amp; Suggestions
- I have to totally give you crap for neglecting to include the `alt` attribute on your image.
- `<meta charset="utf-8">` tag is missing
- Watch your indentation

## Milestone 2&beta; Feedback
Good work so far - stay focused and you should be finished in a handful of focused work hours. Detailed meeting feedback sent via Slack. Your Milestone passes at Tier III.

### Final PWP Feedback

Beautiful work on your PWP - and nice job on the custom jQuery. Your layout looks great on desktop and mobile - nice work on using the Bootstrap grid system to your advantage.

I see that your contact form works, but it's not being submitted via jQuery ajax through form-validate.js. This means you have no front-end validation in place. See Suggestions below for more info. 

Just my opinion, but I think the home page could use the name of the business somewhere prominent. Just an idea.

Really great work here - I hope your client loves it. Your Final PWP passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Nice job!

### Suggestions
- Your contact form does not submit via jQuery validate, but instead submits directly to the php mailer. This means you have no front-end validation for your form. Check and see if your form-validate.js file is uploaded and linked properly.
- You have jQuery loaded twice in your HTML &lt;head&gt; - I'd just stick with v3.0.0
