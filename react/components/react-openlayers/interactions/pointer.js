import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Pointer extends React.Component<any, any> {

  interaction: ol.interaction.Pointer;

  options:  {
    handleDownEvent: undefined,
    handleDragEvent: undefined,
    handleEvent: undefined,
    handleMoveEvent: undefined,
    handleUpEvent: undefined
  };

  events:  {
    'change': undefined,
    'change:active': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.interaction = new ol.interaction.Pointer(options);
    this.context.mapComp.interactions.push(this.interaction)
    
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.interaction.on(eventName, olEvents[eventName]);
    }
  }

}

Pointer['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};