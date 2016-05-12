# Tweet Approved
A simple app that allows people to submit tweets for approval by another. Users can create, review, update, and delete each tweet, and can tweet directly from the app after signing into Twitter.

For further detail on the development process, see my production [TweetApproved repo](https://github.com/dtphelan/tweetapproved).

## Live URL
Visit the working site at [p4.danielphelan.me](http://p4.danielphelan.me).

For TA grading purposes, Jill and Jamal may login with the suggested password.

## Demo
Video coming soon.

## Outside Code
Styling with [Boostrap](http://getboostrap.com).

[Barryvdh debugbar](https://github.com/barryvdh/laravel-debugbar) used in development.

Twitter API implemented with [Thujohn Twitter package](https://github.com/thujohn/twitter).

Bitly API implemented with [BitlyApi](https://github.com/hpatoio/bitly-api).

JQuery submission to Bitly inspired by [http://code.tutsplus.com/tutorials/submit-a-form-without-page-refresh-using-jquery--net-59](http://code.tutsplus.com/tutorials/submit-a-form-without-page-refresh-using-jquery--net-59).

## MVP Features
- Users can submit 140-character-limit tweets
- Approver can approve/reject tweet
- Approver can comment/rewrite tweet
- Approved tweets are stored and viewable

## Feature creep
- [x] Users/organizations
- [ ] Create new organization
- [ ] Link org/user Databases
- [x] Twitter API OAuth
- [ ] User roles
- [ ] Email notifications
- [ ] Password reset
- [x] URL shortener

## To-Do
- [ ] Styling, general (always ongoing)
- [x] Confirmation/error message on tweet submittal/approval
- [ ] Confirmation messages for tweet use/deletion
- [x] Server validation
- [x] Splash page
- [x] Change name to TweetApproved
- [x] Old tweet value with URL shortener. Brainstorm how to do this...concat shortUrl? Two form buttons?
- [ ] Allow users to logout from Twitter...

## Small ideas
- [ ] Number badges on section tabs
- [ ] Fancier splash page
- [x] Favicon
- [x] Character count
- [x] Character count for revise view
