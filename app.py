# app.py

from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)
data_list = []

@app.route('/')
def index():
    return render_template('index.html', data=data_list)

@app.route('/add', methods=['POST'])
def add_data():
    veri = request.form.get('veri')
    if veri:
        data_list.append(veri)
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)
