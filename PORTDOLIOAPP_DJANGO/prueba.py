from flask import Flask

app = Flask(__name__)

@app.route('/')
def home():
    return "Buenas Tardes"

app.run(debug=True)