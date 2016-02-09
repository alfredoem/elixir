/**
 * resources/assets/js/LikeButton.js
 */

import React from 'react';


export default class LikeButton extends React.Component
{
    constructor() {
        super();
        this.state = {liked: false};
    }

    handleClick(e) {
        this.setState({liked: ! this.state.liked});
    }

    render() {
        var icon = this.state.liked ? 'glyphicon-thumbs-up' : 'glyphicon-thumbs-down';
        return (
            <p className="likeParagraph" onClick={this.handleClick.bind(this)}>Your <i className={'glyphicon ' + icon}></i> this. Click to toggle.</p>
        );
    }
}