import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class DragAndDrop extends React.Component<any, any> {

  interaction: ol.interaction.DragAndDrop;

   options:  {
    formatConstructors: undefined,
    projection: undefined,
    target: undefined
  };

  events:  {
    'addfeatures': undefined,
    'change': undefined,
    'change:active': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    console.log('double-click-zoom options', options);
    this.interaction = new ol.interaction.DragAndDrop(options);
    this.context.mapComp.interactions.push(this.interaction)
    
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.interaction.on(eventName, olEvents[eventName]);
    }
  }

}

DragAndDrop['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};