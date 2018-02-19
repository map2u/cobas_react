import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from "../util";
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Select extends React.Component<any, any> {

  interaction: ol.interaction.Select;

  options:  {
    addCondition: undefined,
    condition: undefined,
    layers: undefined,
    style: undefined,
    removeCondition: undefined,
    toggleCondition: undefined,
    multi: undefined,
    features: undefined,
    filter: undefined,
    wrapX: undefined,
    hitTolerance: undefined
  };

  events:  {
    'change': undefined,
    'change:active': undefined,
    'propertychange': undefined,
    'select': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    if (this.props.instance) {
      this.interaction = this.props.instance;
    } else {
      let options = Util.getOptions(Object['assign'](this.options, this.props));
      this.interaction = new ol.interaction.Select(options);
    }
    this.context.mapComp.interactions.push(this.interaction)
    
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.interaction.on(eventName, olEvents[eventName]);
    }
  }

}

Select['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
