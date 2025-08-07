# Send Wii U screenshots to email

**Go here https://wiiu.marcrobledo.com/ in your Wii U Web Browser to use this tool**


A simple web service that makes the most of Wii U's limited web browser capabilities to send game screenshots to your email.
The backend was built with PHP, but it can be relatively easily ported to other programming languages.
The frontend was built to be as fast, intuitive and user-friendly as possible, considering the outdated web browser's limitations.

![Preview](https://raw.githubusercontent.com/marcrobledo/wiiu-screenshots-to-email/refs/heads/main/preview.png)

*This works with any Wii U console, **no modification required**!*

## Background
During the Wii U era, the console featured a service that allowed users to post their favorite game moment screenshots to social networks. It was some kind of workaround, though, it relied on a simple website accessible via the console's browser, since the console lacked a dedicated app for such task. Sadly, the service was discontinued by Nintendo after the console's commercial failure.

As someone who likes taking screenshots of completed games, I missed this feature so I decided to replicate the functionality. The only difference is that instead of sending the pictures to social networks, now they are sent and attached to a provided email address.


## Where can I find it?
You must go to https://wiiu.marcrobledo.com/ in your Wii U Web Browser and follow instructions there to send screenshots to your email.
Keep in mind I am self-hosting this and that, due to bandwidth reasons, I might shutdown it at any time if there is an abuse of usage.

The sourcecode is available for anyone interested in running the service on their own server. Feel free to host it anywhere else.


## Installation
1. Set up a web server with PHP support and add the folder `public/` from the repo
2. Configure your email settings in `public/backend/send.php`

You should be able to access the site through the Wii U's web browser and send screenshots!


## Potential issues
If emails are not being sent or are being bounced back, check your server logs for potential errors (as the PHP `mail` function does not provide detailed feedback).
A common cause is the domain not having the required DNS TXT records:

- [SPF](https://support.google.com/a/answer/33786)
- [DKIM](https://support.google.com/a/answer/174124)

Configuring these records properly should resolve most email delivery issues.


## License
This project is licensed under the [MIT License](https://github.com/marcrobledo/wiiu-screenshots-to-email?tab=MIT-1-ov-file).
