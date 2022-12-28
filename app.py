from flask import Flask, render_template, send_from_directory, abort, url_for, jsonify, redirect, request, session
from werkzeug.utils import secure_filename
import os
import random


app = Flask(__name__)


#
#   ERROR HANDLERS
#
@app.errorhandler(405)
def method_not_allowed(e):
    error = '405'
    msg = 'Method sussy wussy'
    return render_template('error.html', error=error, msg=msg), 404


@app.errorhandler(404)
def page_not_found(e):
    error = '404'
    msg = 'Could not find what you need!'
    return render_template('error.html', error=error, msg=msg), 404


@app.errorhandler(403)
def forbidden(e):
    error = '403'
    msg = 'Go away! This is no place for you!'
    return render_template('error.html', error=error, msg=msg), 403


@app.errorhandler(410)
def gone(e):
    error = '410'
    msg = 'The page is no longer available! *sad face*'
    return render_template('error.html', error=error, msg=msg), 410


@app.errorhandler(500)
def internal_server_error(e):
    error = '500'
    msg = 'Server died inside :c'
    return render_template('error.html', error=error, msg=msg), 500


#
#   ROUTES
#
@app.route('/')
def index():
    msg = ['Some interesting text', 'Balls', 'hiiiiii']
    return render_template('index.html', title=random.choice(msg))

@app.route('/thankies')
def thankies():
    return render_template('thankies.html')

@app.route('/funny')
def funny():
    return render_template('funny.html')

@app.route('/status')
def status():
    abort(403)

@app.route('/error/<error>/<msg>')
def error(error, msg):
    try:
        error = str(error)
    except:
        abort(405)
    
    try:
        msg = str(msg)
    except:
        abort(405)
    
    return render_template('error.html', error=error, msg=msg)


#
#   METHODS
#
@app.route('/fileList/<item_type>', methods=['GET'])
def image_list(item_type):
    if request.method != 'GET':
        abort(405)

    #return jsonify(item_list)