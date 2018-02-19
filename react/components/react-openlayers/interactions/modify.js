import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Modify extends React.Component<any, any> {

  interaction: ol.interaction.Modify;

  options:  {
    condition: undefined,
    deleteCondition: undefined,
    pixelTolerance: undefined,
    style: undefined,
    features: undefined,
    wrapX: undefined
  };

  events:  {
    'change': undefined,
    'change:active': undefined,
    'modifyend': undefined,
    'modifystart': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    console.log('modify options', options);
    this.interaction = new ol.interaction.Modify(options);
    this.context.mapComp.interactions.push(this.interaction)
    
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.interaction.on(eventName, olEvents[eventName]);
    }
  }

}

Modify['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
