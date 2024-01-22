from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)


@app.route('/', methods=['GET', 'POST'])
def index():
    thank_you_message = ''

    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        subject = request.form['subject']
        message = request.form['message']

        # Replace this with your email address
        to_email = 'mdahureddy8801@gmail.com'

        # Process the form data (you can send an email here if needed)

        # Optionally, you can display a thank you message
        thank_you_message = 'Thank you for your message!'

    return render_template('index.html', thank_you_message=thank_you_message)


if __name__ == '__main__':
    app.run(debug=True)
