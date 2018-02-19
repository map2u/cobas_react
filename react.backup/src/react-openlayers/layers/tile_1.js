import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from '../util';
import {Map} from '../map';

export class Tile extends React.Component<any, any> {

    constructor(props) {
    super(props);

    this.options =  {
        zIndex: undefined,
        opacity: undefined,
        preload: undefined,
        source: undefined,
        visible: undefined,
        extent: undefined,
        minResolution: undefined,
        maxResolution: undefined,
        useInterimTilesOnError: undefined
      };
      this.events = {
           'change': undefined,
           'change:extent': undefined,
           'change:maxResolution': undefined,
           'change:minResolution': undefined,
           'change:opacity': undefined,
           'change:preload': undefined,
           'change:source': undefined,
           'change:useInterimTilesOnError': undefined,
           'change:visible': undefined,
           'change:zIndex': undefined,
           'postcompose': undefined,
           'precompose': undefined,
           'propertychange': undefined,
           'render': undefined
         };
  }

  render() {
    return null;
  }

  componentDidMount () {
    let options = Util.getOptions(Object.assign(this.options, this.props));
    options.source = options.source || new ol.source.OSM();
    this.layer = new ol.layer.Tile(options);
    this.context.mapComp.layers.push(this.layer)
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.layer.on(eventName, olEvents[eventName]);
    }
  }
}
console.log(typeof React.PropTypes.instanceOf);

Tile['contextTypes'] = {
  mapComp: React.PropTypes.instanceOf(Map),
  map: React.PropTypes.instanceOf(ol.Map)
};
