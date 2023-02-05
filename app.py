from flask import Flask, render_template, redirect
from flask_compress import Compress

import requests
import dotenv
from random import choice
import json


LASTFM_API_KEY = dotenv.get_key('./.env', 'LASTFM')


app = Flask(__name__)
Compress(app)


#
#   ROUTES
#
@app.route('/')
def index():
    msg = ['This is a test string',
           'This could go one of two ways...',
           'Gwa Gwa', 'It\'s a UNIX system! I know this!',
           'They turned him into a pickle, its the funnies shit I\'ve ever seen',
           '*internal screaming*',
           'Don\'t forget to drink water!',
           'Fluffy made this!',
           'I wish we were better strangers.',
           'If I were you, I\'d run now',
           'SILICA GEL "DO NOT EAT".',
           'AAAAAAAAAAAAAAAAAAAA',
           'The weather is dry',
           'Gods die too.',
           'Eat hotchip and lie']
    
    return render_template('index.html', msg=choice(msg))


@app.route('/cretura')
def cretura():
    return render_template('cretura.html')


@app.route('/about')
def about():
    return render_template('about.html')


@app.route('/music')
def music():
    current_tracks = requests.get(
        f'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Fluffy_Bean_&api_key={LASTFM_API_KEY}&limit=5&format=json')
    current_tracks = json.loads(current_tracks.text)
    
    tracks = []
    
    for track in current_tracks['recenttracks']['track']:
        nowPlaying = False
        if '@attr' in track:
            nowPlaying = True
            
        tmp_track = {
            'name': track['name'],
            'artist': track['artist']['#text'],
            'album': track['album']['#text'],
            'url': track['url'],
            'image': track['image'][2]['#text'],
            'nowPlaying': nowPlaying,
        }
        
        tracks.append(tmp_track)
    
    return render_template('music.html', tracks=tracks)


@app.route('/blog')
def blog():
    return render_template('blog.html')


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