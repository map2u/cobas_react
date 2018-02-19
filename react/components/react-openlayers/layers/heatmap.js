import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Heatmap extends React.Component<any, any> {
  constructor(props) {
    super(props);
   
  }
  layer: ol.layer.Heatmap;

  options:  {
    gradient: undefined,
    radius: undefined,
    blur: undefined,
    shadow: undefined,
    weight: undefined,
    extent: undefined,
    minResolution: undefined,
    maxResolution: undefined,
    opacity: undefined,
    source: undefined, 
    visible: undefined
  };

  events:  {
    'change': undefined,
    'change:blur': undefined,
    'change:extent': undefined,
    'change:gradient': undefined,
    'change:maxResolution': undefined,
    'change:minResolution': undefined,
    'change:opacity': undefined,
    'change:radius': undefined,
    'change:source': undefined,
    'change:visible': undefined,
    'change:zIndex': undefined,
    'postcompose': undefined,
    'precompose': undefined,
    'propertychange': undefined,
    'render': undefined
  };

  

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.layer = new ol.layer.Heatmap(options);
    this.context.mapComp.layers.push(this.layer);

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.layer.on(eventName, olEvents[eventName]);
    }
  }

}

Heatmap['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
