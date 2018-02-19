import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Image extends React.Component<any, any> {

  layer: ol.layer.Image;

  options:  {
    opacity: undefined,
    source: undefined,
    visible: undefined,
    extent: undefined,
    minResolution: undefined,
    maxResolution: undefined
  };

  events:  {
    'change': undefined,
    'change:extent': undefined,
    'change:gradient': undefined,
    'change:maxResolution': undefined,
    'change:minResolution': undefined,
    'change:opacity': undefined,
    'change:source': undefined,
    'change:visible': undefined,
    'change:zIndex': undefined,
    'postcompose': undefined,
    'precompose': undefined,
    'propertychange': undefined,
    'render': undefined
  };

  constructor(props) { 
    super(props);
  }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.layer = new ol.layer.Image(options);
    this.context.mapComp.layers.push(this.layer);

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.layer.on(eventName, olEvents[eventName]);
    }
  }

}

Image['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
